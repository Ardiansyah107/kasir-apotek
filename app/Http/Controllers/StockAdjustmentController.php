<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\StockAdjustment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockAdjustmentController extends Controller
{
    public function index()
    {
        $obat = Obat::latest()->get();

        $adjustments = StockAdjustment::with(['obat', 'user'])
            ->latest()
            ->get();

        return view('stock_adjustment.index', compact('obat', 'adjustments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'obat_id' => 'required|exists:obat,id',
            'tipe' => 'required|in:IN,OUT',
            'jumlah' => 'required|integer|min:1',
            'alasan' => 'required|string|max:255',
        ], [
            'obat_id.required' => 'Obat wajib dipilih.',
            'obat_id.exists' => 'Obat tidak valid.',
            'tipe.required' => 'Tipe adjustment wajib dipilih.',
            'tipe.in' => 'Tipe adjustment tidak valid.',
            'jumlah.required' => 'Jumlah wajib diisi.',
            'jumlah.integer' => 'Jumlah harus berupa angka bulat.',
            'jumlah.min' => 'Jumlah minimal 1.',
            'alasan.required' => 'Alasan wajib diisi.',
        ]);

        $obat = Obat::findOrFail($request->obat_id);

        if ($request->tipe === 'OUT' && $request->jumlah > $obat->stok) {
            return back()
                ->withInput()
                ->with('error', 'Stok tidak mencukupi untuk adjustment OUT.');
        }

        DB::transaction(function () use ($request, $obat) {

            if ($request->tipe === 'IN') {
                $obat->increment('stok', $request->jumlah);
            } else {
                $obat->decrement('stok', $request->jumlah);
            }

            StockAdjustment::create([
                'obat_id' => $obat->id,
                'tipe' => $request->tipe,
                'jumlah' => $request->jumlah,
                'alasan' => $request->alasan,
                'created_by' => auth()->id(),
            ]);
        });

        return redirect()
            ->route('stock-adjustment.index')
            ->with('success', 'Stock adjustment berhasil disimpan.');
    }
}