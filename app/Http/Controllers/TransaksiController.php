<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransaksiController extends Controller
{
    public function proses(Request $request)
    {
        $request->validate([
            'keranjang' => 'required|array|min:1',
            'keranjang.*.id' => 'required|integer|exists:obat,id',
            'keranjang.*.qty' => 'required|integer|min:1',
            'diskon' => 'nullable|numeric|min:0',
            'metode_pembayaran' => 'required|in:Cash,Transfer,QRIS',
            'jumlah_bayar' => 'required|numeric|min:0',
        ], [
            'keranjang.required' => 'Keranjang masih kosong.',
            'keranjang.min' => 'Minimal pilih satu obat.',
            'keranjang.*.id.exists' => 'Obat yang dipilih tidak ditemukan.',
            'keranjang.*.qty.min' => 'Jumlah obat minimal 1.',
            'diskon.numeric' => 'Diskon harus berupa angka.',
            'diskon.min' => 'Diskon tidak boleh kurang dari 0.',
            'metode_pembayaran.required' => 'Metode pembayaran wajib dipilih.',
            'metode_pembayaran.in' => 'Metode pembayaran tidak valid.',
            'jumlah_bayar.required' => 'Jumlah bayar wajib diisi.',
            'jumlah_bayar.numeric' => 'Jumlah bayar harus berupa angka.',
            'jumlah_bayar.min' => 'Jumlah bayar tidak boleh kurang dari 0.',
        ]);

        DB::beginTransaction();

        try {
            $subtotal = 0;
            $detailObat = [];

            foreach ($request->keranjang as $item) {
                $obat = Obat::lockForUpdate()->findOrFail($item['id']);

                if ($obat->status !== 'aktif') {
                    throw new \Exception(
                        'Obat ' . $obat->nama_obat . ' sedang tidak aktif.'
                    );
                }

                if ($item['qty'] > $obat->stok) {
                    throw new \Exception(
                        'Stok ' . $obat->nama_obat .
                        ' tidak mencukupi. Stok tersedia: ' .
                        $obat->stok
                    );
                }

                $subtotalItem = $obat->harga_jual * $item['qty'];
                $subtotal += $subtotalItem;

                $detailObat[] = [
                    'obat' => $obat,
                    'qty' => $item['qty'],
                    'subtotal' => $subtotalItem,
                ];
            }

            $diskon = $request->diskon ?? 0;

            if ($diskon > $subtotal) {
                throw new \Exception(
                    'Diskon tidak boleh lebih besar dari subtotal.'
                );
            }

            $totalHarga = $subtotal - $diskon;

            $metodePembayaran = $request->metode_pembayaran;
            $jumlahBayar = $request->jumlah_bayar;

            if ($jumlahBayar < $totalHarga) {
                throw new \Exception(
                    'Jumlah pembayaran kurang. Total yang harus dibayar: Rp ' .
                    number_format($totalHarga, 0, ',', '.')
                );
            }

            $kembalian = $jumlahBayar - $totalHarga;

            $kodeTransaksi =
                'TRX-' .
                now()->format('YmdHis') .
                '-' .
                strtoupper(Str::random(4));

            $transaksi = Transaksi::create([
                'kode_transaksi' => $kodeTransaksi,
                'user_id' => auth()->id(),
                'tanggal_transaksi' => now(),
                'subtotal' => $subtotal,
                'diskon' => $diskon,
                'total_harga' => $totalHarga,
                'metode_pembayaran' => $metodePembayaran,
                'jumlah_bayar' => $jumlahBayar,
                'kembalian' => $kembalian,
            ]);

            foreach ($detailObat as $item) {
                $obat = $item['obat'];
                $qty = $item['qty'];

                DetailTransaksi::create([
                    'transaksi_id' => $transaksi->id,
                    'obat_id' => $obat->id,
                    'jumlah' => $qty,
                    'harga' => $obat->harga_jual,
                    'subtotal' => $item['subtotal'],
                ]);

                $obat->decrement('stok', $qty);
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Transaksi berhasil disimpan.',
                'kode_transaksi' => $kodeTransaksi,
                'id' => $transaksi->id,
                'total' => $totalHarga,
                'kembalian' => $kembalian,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }

    public function index(Request $request)
    {
        $query = Transaksi::with('detail')
            ->latest();

        // Search berdasarkan kode transaksi / invoice
        if ($request->filled('search')) {
            $query->where(
                'kode_transaksi',
                'like',
                '%' . $request->search . '%'
            );
        }

        // Filter berdasarkan tanggal mulai
        if ($request->filled('tanggal_mulai')) {
            $query->whereDate(
                'created_at',
                '>=',
                $request->tanggal_mulai
            );
        }

        // Filter berdasarkan tanggal selesai
        if ($request->filled('tanggal_selesai')) {
            $query->whereDate(
                'created_at',
                '<=',
                $request->tanggal_selesai
            );
        }

        $transaksi = $query->get();

        return view(
            'transaksi.index',
            compact('transaksi')
        )->with([
            'search' => $request->search,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);
    }

    public function laporan(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
        ], [
            'tanggal_mulai.date' => 'Tanggal mulai tidak valid.',
            'tanggal_selesai.date' => 'Tanggal selesai tidak valid.',
            'tanggal_selesai.after_or_equal' =>
                'Tanggal selesai tidak boleh sebelum tanggal mulai.',
        ]);

        $tanggalMulai = $request->tanggal_mulai;
        $tanggalSelesai = $request->tanggal_selesai;

        // Ambil transaksi sekaligus detail obat dan data kasir
        $query = Transaksi::with([
            'detail.obat',
            'user'
        ])->latest();

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

        $totalTransaksi = $transaksi->count();

        $totalItem = $transaksi->sum(function ($item) {
            return $item->detail->sum('jumlah');
        });

        $totalPendapatan = $transaksi->sum('total_harga');

        return view(
            'laporan',
            compact(
                'transaksi',
                'totalTransaksi',
                'totalItem',
                'totalPendapatan',
                'tanggalMulai',
                'tanggalSelesai'
            )
        );
    }

    public function detail($id)
    {
        $transaksi = Transaksi::with('detail.obat')
            ->findOrFail($id);

        return view(
            'transaksi.detail',
            compact('transaksi')
        );
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $transaksi = Transaksi::with('detail')
                ->findOrFail($id);

            foreach ($transaksi->detail as $detail) {
                $obat = Obat::find($detail->obat_id);

                if ($obat) {
                    $obat->increment(
                        'stok',
                        $detail->jumlah
                    );
                }
            }

            DetailTransaksi::where(
                'transaksi_id',
                $transaksi->id
            )->delete();

            $transaksi->delete();

            DB::commit();

            return redirect()
                ->route('transaksi.index')
                ->with(
                    'success',
                    'Transaksi berhasil dihapus.'
                );
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()
                ->route('transaksi.index')
                ->with(
                    'error',
                    'Transaksi gagal dihapus.'
                );
        }
    }
}