<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Kategori;

class ObatController extends Controller
{
    // =========================
    // DAFTAR OBAT
    // =========================
    public function index(Request $request)
    {
        $query = Obat::query();

        // =========================
        // SEARCH
        // =========================
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('kode_obat', 'like', '%' . $search . '%')
                    ->orWhere('barcode', 'like', '%' . $search . '%')
                    ->orWhere('nama_obat', 'like', '%' . $search . '%');
            });
        }

        // =========================
        // FILTER KATEGORI
        // =========================
        if ($request->filled('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        // =========================
        // FILTER STATUS STOK
        // =========================
        if ($request->filled('stok_status')) {

            if ($request->stok_status === 'habis') {
                $query->where('stok', 0);
            }

            if ($request->stok_status === 'menipis') {
                $query->whereColumn('stok', '<', 'minimum_stok')
                    ->where('stok', '>', 0);
            }

            if ($request->stok_status === 'aman') {
                $query->whereColumn('stok', '>=', 'minimum_stok');
            }
        }

        // =========================
        // FILTER STATUS OBAT
        // =========================
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $obat = $query
            ->latest()
            ->get();

        // =========================
        // DATA KATEGORI UNTUK FILTER
        // =========================
        $kategori = Kategori::orderBy('nama')->get();

        // =========================
        // STATISTIK
        // =========================
        $totalObat = Obat::count();

        $totalStok = Obat::sum('stok');

        $stokMenipis = Obat::whereColumn('stok', '<', 'minimum_stok')
            ->where('stok', '>', 0)
            ->count();

        $stokHabis = Obat::where('stok', 0)
            ->count();

        // =========================
        // OBAT AKAN EXPIRED
        // 30 HARI KE DEPAN
        // =========================
        $akanExpired = Obat::whereNotNull('tanggal_kadaluarsa')
            ->whereDate(
                'tanggal_kadaluarsa',
                '<=',
                now()->addDays(30)
            )
            ->whereDate(
                'tanggal_kadaluarsa',
                '>=',
                today()
            )
            ->count();

        return view('obat', compact(
            'obat',
            'kategori',
            'totalObat',
            'totalStok',
            'stokMenipis',
            'stokHabis',
            'akanExpired'
        ));
    }

    // =========================
    // FORM TAMBAH OBAT
    // =========================
    public function create()
    {
        $kategori = Kategori::where('status', 'aktif')
            ->orderBy('nama')
            ->get();

        return view('create', compact('kategori'));
    }

    // =========================
    // SIMPAN OBAT BARU
    // =========================
    public function store(Request $request)
    {
        $request->validate([
            'kode_obat' => 'required|unique:obat,kode_obat',
            'barcode' => 'nullable|unique:obat,barcode',
            'nama_obat' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
            'satuan' => 'required',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|gte:harga_beli',
            'stok' => 'required|integer|min:0',
            'minimum_stok' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'nullable|date',
            'status' => 'required|in:aktif,nonaktif',
        ], [
            'kode_obat.required' => 'Kode obat wajib diisi.',
            'kode_obat.unique' => 'Kode obat tersebut sudah digunakan.',

            'barcode.unique' => 'Barcode tersebut sudah digunakan.',

            'nama_obat.required' => 'Nama obat wajib diisi.',

            'kategori_id.required' => 'Kategori obat wajib dipilih.',
            'kategori_id.exists' => 'Kategori obat tidak valid.',

            'satuan.required' => 'Satuan obat wajib diisi.',

            'harga_beli.required' => 'Harga beli wajib diisi.',
            'harga_beli.numeric' => 'Harga beli harus berupa angka.',
            'harga_beli.min' => 'Harga beli tidak boleh kurang dari 0.',

            'harga_jual.required' => 'Harga jual wajib diisi.',
            'harga_jual.numeric' => 'Harga jual harus berupa angka.',
            'harga_jual.gte' => 'Harga jual tidak boleh lebih rendah dari harga beli.',

            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka bulat.',
            'stok.min' => 'Stok tidak boleh kurang dari 0.',

            'minimum_stok.required' => 'Minimum stok wajib diisi.',
            'minimum_stok.integer' => 'Minimum stok harus berupa angka bulat.',
            'minimum_stok.min' => 'Minimum stok tidak boleh kurang dari 0.',

            'tanggal_kadaluarsa.date' => 'Tanggal kadaluarsa tidak valid.',

            'status.required' => 'Status obat wajib dipilih.',
            'status.in' => 'Status obat tidak valid.',
        ]);

        $kategori = Kategori::findOrFail($request->kategori_id);

        Obat::create([
            'kode_obat' => $request->kode_obat,
            'barcode' => $request->barcode,
            'nama_obat' => $request->nama_obat,

            'kategori_id' => $request->kategori_id,
            'kategori' => $kategori->nama,

            'satuan' => $request->satuan,

            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,

            'stok' => $request->stok,
            'minimum_stok' => $request->minimum_stok,

            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('obat.index')
            ->with('success', 'Obat berhasil ditambahkan.');
    }

    // =========================
    // FORM EDIT OBAT
    // =========================
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);

        $kategori = Kategori::where('status', 'aktif')
            ->orderBy('nama')
            ->get();

        return view('edit', compact(
            'obat',
            'kategori'
        ));
    }

    // =========================
    // UPDATE OBAT
    // =========================
    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);

        $request->validate([
            'kode_obat' => 'required|unique:obat,kode_obat,' . $id,
            'barcode' => 'nullable|unique:obat,barcode,' . $id,
            'nama_obat' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
            'satuan' => 'required',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|gte:harga_beli',
            'stok' => 'required|integer|min:0',
            'minimum_stok' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'nullable|date',
            'status' => 'required|in:aktif,nonaktif',
        ], [
            'kode_obat.required' => 'Kode obat wajib diisi.',
            'kode_obat.unique' => 'Kode obat tersebut sudah digunakan.',

            'barcode.unique' => 'Barcode tersebut sudah digunakan.',

            'nama_obat.required' => 'Nama obat wajib diisi.',

            'kategori_id.required' => 'Kategori obat wajib dipilih.',
            'kategori_id.exists' => 'Kategori obat tidak valid.',

            'satuan.required' => 'Satuan obat wajib diisi.',

            'harga_beli.required' => 'Harga beli wajib diisi.',
            'harga_beli.numeric' => 'Harga beli harus berupa angka.',
            'harga_beli.min' => 'Harga beli tidak boleh kurang dari 0.',

            'harga_jual.required' => 'Harga jual wajib diisi.',
            'harga_jual.numeric' => 'Harga jual harus berupa angka.',
            'harga_jual.gte' => 'Harga jual tidak boleh lebih rendah dari harga beli.',

            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka bulat.',
            'stok.min' => 'Stok tidak boleh kurang dari 0.',

            'minimum_stok.required' => 'Minimum stok wajib diisi.',
            'minimum_stok.integer' => 'Minimum stok harus berupa angka bulat.',
            'minimum_stok.min' => 'Minimum stok tidak boleh kurang dari 0.',

            'tanggal_kadaluarsa.date' => 'Tanggal kadaluarsa tidak valid.',

            'status.required' => 'Status obat wajib dipilih.',
            'status.in' => 'Status obat tidak valid.',
        ]);

        $kategori = Kategori::findOrFail($request->kategori_id);

        $obat->update([
            'kode_obat' => $request->kode_obat,
            'barcode' => $request->barcode,
            'nama_obat' => $request->nama_obat,

            'kategori_id' => $request->kategori_id,
            'kategori' => $kategori->nama,

            'satuan' => $request->satuan,

            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,

            'stok' => $request->stok,
            'minimum_stok' => $request->minimum_stok,

            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('obat.index')
            ->with('success', 'Data obat berhasil diperbarui.');
    }

    // =========================
    // HAPUS OBAT
    // =========================
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);

        $obat->delete();

        return redirect()
            ->route('obat.index')
            ->with('success', 'Obat berhasil dihapus.');
    }
}