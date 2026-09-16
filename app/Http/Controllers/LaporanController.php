<?php

namespace App\Http\Controllers;

use App\Models\Obat;

class LaporanController extends Controller
{
    public function stok()
    {
        $obat = Obat::orderBy('nama_obat', 'asc')->get();

        $totalObat = $obat->count();

        $totalStok = $obat->sum('stok');

        $totalNilaiStok = $obat->sum(function ($item) {
            return $item->stok * $item->harga_beli;
        });

        return view('laporan_stok', compact(
            'obat',
            'totalObat',
            'totalStok',
            'totalNilaiStok'
        ));
    }
}