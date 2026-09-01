<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    // =========================
    // DAFTAR OBAT
    // =========================
    public function index(Request $request)
    {
        $query = Obat::query();

        // Pencarian
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('kode_obat', 'like', '%' . $search . '%')
                  ->orWhere('nama_obat', 'like', '%' . $search . '%');
            });
        }

        $obat = $query->latest()->get();

        return view('obat', compact('obat'));
    }


    // =========================
    // FORM TAMBAH OBAT
    // =========================
    public function create()
    {
        return view('create');
    }


    // =========================
    // SIMPAN OBAT BARU
    // =========================
    public function store(Request $request)
    {
        $request->validate([
            'kode_obat' => 'required|unique:obat,kode_obat',
            'nama_obat' => 'required',
            'kategori' => 'required',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|gte:harga_beli',
            'stok' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
        ], [
            'kode_obat.required' => 'Kode obat wajib diisi.',
            'kode_obat.unique' => 'Kode obat tersebut sudah digunakan. Silakan gunakan kode lain.',
            'nama_obat.required' => 'Nama obat wajib diisi.',
            'kategori.required' => 'Kategori obat wajib dipilih.',
            'harga_beli.required' => 'Harga beli wajib diisi.',
            'harga_beli.numeric' => 'Harga beli harus berupa angka.',
            'harga_jual.required' => 'Harga jual wajib diisi.',
            'harga_jual.numeric' => 'Harga jual harus berupa angka.',
            'harga_jual.gte' => 'Harga jual tidak boleh lebih rendah dari harga beli.',
            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka bulat.',
            'stok.min' => 'Stok tidak boleh kurang dari 0.',
            'tanggal_kadaluarsa.required' => 'Tanggal kadaluarsa wajib diisi.',
            'tanggal_kadaluarsa.date' => 'Tanggal kadaluarsa tidak valid.',
        ]);

        Obat::create([
            'kode_obat' => $request->kode_obat,
            'nama_obat' => $request->nama_obat,
            'kategori' => $request->kategori,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        ]);

        return redirect('/obat')
            ->with('success', 'Obat berhasil ditambahkan.');
    }


    // =========================
    // FORM EDIT OBAT
    // =========================
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);

        return view('edit', compact('obat'));
    }


    // =========================
    // UPDATE OBAT
    // =========================
    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);

        $request->validate([
            'kode_obat' => 'required|unique:obat,kode_obat,' . $id,
            'nama_obat' => 'required',
            'kategori' => 'required',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|gte:harga_beli',
            'stok' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
        ], [
            'kode_obat.required' => 'Kode obat wajib diisi.',
            'kode_obat.unique' => 'Kode obat tersebut sudah digunakan oleh obat lain.',
            'nama_obat.required' => 'Nama obat wajib diisi.',
            'kategori.required' => 'Kategori obat wajib dipilih.',
            'harga_beli.required' => 'Harga beli wajib diisi.',
            'harga_beli.numeric' => 'Harga beli harus berupa angka.',
            'harga_jual.required' => 'Harga jual wajib diisi.',
            'harga_jual.numeric' => 'Harga jual harus berupa angka.',
            'harga_jual.gte' => 'Harga jual tidak boleh lebih rendah dari harga beli.',
            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka bulat.',
            'stok.min' => 'Stok tidak boleh kurang dari 0.',
            'tanggal_kadaluarsa.required' => 'Tanggal kadaluarsa wajib diisi.',
            'tanggal_kadaluarsa.date' => 'Tanggal kadaluarsa tidak valid.',
        ]);

        $obat->update([
            'kode_obat' => $request->kode_obat,
            'nama_obat' => $request->nama_obat,
            'kategori' => $request->kategori,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        ]);

        return redirect('/obat')
            ->with('success', 'Obat berhasil diperbarui.');
    }


    // =========================
    // HAPUS OBAT
    // =========================
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);

        $obat->delete();

        return redirect('/obat')
            ->with('success', 'Obat berhasil dihapus.');
    }
}