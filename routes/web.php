<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransaksiController;
use App\Models\Obat;
use App\Models\Transaksi;


/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| HALAMAN SETELAH LOGIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function () {

        $totalObat = Obat::count();

        $totalStok = Obat::sum('stok');

        $totalTransaksiHariIni = Transaksi::whereDate(
            'created_at',
            today()
        )->count();

        $pendapatanHariIni = Transaksi::whereDate(
            'created_at',
            today()
        )->sum('total_harga');

        $stokMenipis = Obat::where('stok', '<', 20)
            ->count();

        $stokHabis = Obat::where('stok', 0)
            ->count();

        $obatTerbaru = Obat::latest()
            ->take(5)
            ->get();

        $obatMenipis = Obat::where('stok', '<', 20)
            ->orderBy('stok', 'asc')
            ->take(5)
            ->get();

        $transaksiTerbaru = Transaksi::latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalObat',
            'totalStok',
            'totalTransaksiHariIni',
            'pendapatanHariIni',
            'stokMenipis',
            'stokHabis',
            'obatTerbaru',
            'obatMenipis',
            'transaksiTerbaru'
        ));
    });


    /*
    |--------------------------------------------------------------------------
    | OBAT
    |--------------------------------------------------------------------------
    */

    Route::get('/obat', [ObatController::class, 'index'])
        ->name('obat.index');

    Route::get('/obat/create', [ObatController::class, 'create'])
        ->name('obat.create');

    Route::post('/obat', [ObatController::class, 'store'])
        ->name('obat.store');

    Route::get('/obat/{id}/edit', [ObatController::class, 'edit'])
        ->name('obat.edit');

    Route::put('/obat/{id}', [ObatController::class, 'update'])
        ->name('obat.update');

    Route::delete('/obat/{id}', [ObatController::class, 'destroy'])
        ->name('obat.destroy');


    /*
    |--------------------------------------------------------------------------
    | KASIR
    |--------------------------------------------------------------------------
    */

    Route::get('/kasir', function () {

        $obat = Obat::where('stok', '>', 0)
            ->orderBy('nama_obat', 'asc')
            ->get();

        return view('kasir', compact('obat'));

    })->name('kasir');


    /*
    |--------------------------------------------------------------------------
    | TRANSAKSI
    |--------------------------------------------------------------------------
    */

    Route::get('/transaksi', [TransaksiController::class, 'index'])
        ->name('transaksi.index');

    Route::post('/transaksi/proses', [TransaksiController::class, 'proses'])
        ->name('transaksi.proses');

    Route::get('/transaksi/{id}', [TransaksiController::class, 'detail'])
        ->name('transaksi.detail');

    Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])
        ->name('transaksi.destroy');


    /*
    |--------------------------------------------------------------------------
    | LAPORAN
    |--------------------------------------------------------------------------
    */

    Route::get('/laporan', [TransaksiController::class, 'laporan'])
        ->name('laporan');

    Route::get('/pengaturan', function () {
    return view('pengaturan');
                                            })->name('pengaturan');

});