<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | PROSES TRANSAKSI
    |--------------------------------------------------------------------------
    */

    public function proses(Request $request)
    {
        $request->validate([
            'keranjang' => 'required|array|min:1',
            'keranjang.*.id' => 'required|integer',
            'keranjang.*.qty' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();

        try {

            $totalHarga = 0;

            foreach ($request->keranjang as $item) {

                $obat = Obat::findOrFail($item['id']);

                if ($item['qty'] > $obat->stok) {
                    throw new \Exception(
                        'Stok ' . $obat->nama_obat . ' tidak mencukupi.'
                    );
                }

                $totalHarga += $obat->harga_jual * $item['qty'];
            }

            $kodeTransaksi = 'TRX-' . date('YmdHis');

            $transaksi = Transaksi::create([
                'kode_transaksi' => $kodeTransaksi,
                'total_harga' => $totalHarga,
            ]);

            foreach ($request->keranjang as $item) {

                $obat = Obat::findOrFail($item['id']);

                $subtotal = $obat->harga_jual * $item['qty'];

                DetailTransaksi::create([
                    'transaksi_id' => $transaksi->id,
                    'obat_id' => $obat->id,
                    'jumlah' => $item['qty'],
                    'harga' => $obat->harga_jual,
                    'subtotal' => $subtotal,
                ]);

                $obat->decrement('stok', $item['qty']);
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Transaksi berhasil disimpan.',
                'kode_transaksi' => $kodeTransaksi,
                'id' => $transaksi->id,
            ]);

        } catch (\Exception $e) {

            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | RIWAYAT TRANSAKSI
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $transaksi = Transaksi::with('detail')
            ->latest()
            ->get();

        return view('transaksi.index', compact('transaksi'));
    }


    /*
    |--------------------------------------------------------------------------
    | LAPORAN
    |--------------------------------------------------------------------------
    */

    public function laporan(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDASI TANGGAL
        |--------------------------------------------------------------------------
        */

        $request->validate([
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
        ], [
            'tanggal_mulai.date' =>
                'Tanggal mulai tidak valid.',

            'tanggal_selesai.date' =>
                'Tanggal selesai tidak valid.',

            'tanggal_selesai.after_or_equal' =>
                'Tanggal selesai tidak boleh sebelum tanggal mulai.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | FILTER
        |--------------------------------------------------------------------------
        */

        $tanggalMulai = $request->tanggal_mulai;
        $tanggalSelesai = $request->tanggal_selesai;


        $query = Transaksi::with('detail')
            ->latest();


        if ($tanggalMulai) {

            $query->whereDate(
                'created_at',
                '>=',
                $tanggalMulai
            );

        }


        if ($tanggalSelesai) {

            $query->whereDate(
                'created_at',
                '<=',
                $tanggalSelesai
            );

        }


        $transaksi = $query->get();


        /*
        |--------------------------------------------------------------------------
        | STATISTIK
        |--------------------------------------------------------------------------
        */

        $totalTransaksi = $transaksi->count();


        $totalItem = $transaksi->sum(function ($item) {

            return $item->detail->sum('jumlah');

        });


        $totalPendapatan = $transaksi->sum('total_harga');


        return view('laporan', compact(
            'transaksi',
            'totalTransaksi',
            'totalItem',
            'totalPendapatan',
            'tanggalMulai',
            'tanggalSelesai'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | DETAIL TRANSAKSI
    |--------------------------------------------------------------------------
    */

    public function detail($id)
    {
        $transaksi = Transaksi::with('detail.obat')
            ->findOrFail($id);

        return view('transaksi.detail', compact('transaksi'));
    }
    /*
|--------------------------------------------------------------------------
| HAPUS TRANSAKSI
|--------------------------------------------------------------------------
*/

public function destroy($id)
{
    DB::beginTransaction();

    try {

        $transaksi = Transaksi::with('detail')
            ->findOrFail($id);

        /*
        | Kembalikan stok obat
        */

        foreach ($transaksi->detail as $detail) {

            $obat = Obat::find($detail->obat_id);

            if ($obat) {
                $obat->increment('stok', $detail->jumlah);
            }
        }

        /*
        | Hapus detail transaksi
        */

        DetailTransaksi::where(
            'transaksi_id',
            $transaksi->id
        )->delete();

        /*
        | Hapus transaksi
        */

        $transaksi->delete();

        DB::commit();

        return redirect()
            ->route('transaksi.index')
            ->with('success', 'Transaksi berhasil dihapus.');

    } catch (\Exception $e) {

        DB::rollBack();

        return redirect()
            ->route('transaksi.index')
            ->with('error', 'Transaksi gagal dihapus.');
    }
}
}