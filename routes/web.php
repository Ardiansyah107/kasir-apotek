<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\ObatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\StockAdjustmentController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;

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
    | ADMIN + KASIR
    */

    Route::middleware('role:admin,kasir')->group(function () {

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

            /*
            |--------------------------------------------------------------------------
            | STOK MENIPIS
            |--------------------------------------------------------------------------
            */

            $stokMenipis = Obat::whereColumn('stok', '<=', 'minimum_stok')
                ->where('stok', '>', 0)
                ->count();

            /*
            |--------------------------------------------------------------------------
            | STOK HABIS
            |--------------------------------------------------------------------------
            */

            $stokHabis = Obat::where('stok', 0)
                ->count();

            /*
            |--------------------------------------------------------------------------
            | AKAN EXPIRED
            |--------------------------------------------------------------------------
            */

            $akanExpired = Obat::whereNotNull('tanggal_kadaluarsa')
                ->whereDate('tanggal_kadaluarsa', '>=', today())
                ->whereDate(
                    'tanggal_kadaluarsa',
                    '<=',
                    today()->addDays(30)
                )
                ->count();

            /*
            |--------------------------------------------------------------------------
            | OBAT TERBARU
            |--------------------------------------------------------------------------
            */

            $obatTerbaru = Obat::latest()
                ->take(5)
                ->get();

            /*
            |--------------------------------------------------------------------------
            | DAFTAR OBAT MENIPIS
            |--------------------------------------------------------------------------
            */

            $obatMenipis = Obat::whereColumn('stok', '<=', 'minimum_stok')
                ->where('stok', '>', 0)
                ->orderBy('stok', 'asc')
                ->take(5)
                ->get();

            /*
            |--------------------------------------------------------------------------
            | TRANSAKSI TERBARU
            |--------------------------------------------------------------------------
            */

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
                'akanExpired',
                'obatTerbaru',
                'obatMenipis',
                'transaksiTerbaru'
            ));

        })->name('dashboard');


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

    });


    /*
    |--------------------------------------------------------------------------
    | ADMIN ONLY
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:admin')->group(function () {

        /*
        |--------------------------------------------------------------------------
        | HAPUS TRANSAKSI
        |--------------------------------------------------------------------------
        */

        Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])
            ->name('transaksi.destroy');


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
        | KATEGORI
        |--------------------------------------------------------------------------
        */

        Route::resource('kategori', KategoriController::class)
            ->except(['show']);


        /*
        |--------------------------------------------------------------------------
        | STOCK ADJUSTMENT
        |--------------------------------------------------------------------------
        */

        Route::get('/stock-adjustment', [StockAdjustmentController::class, 'index'])
            ->name('stock-adjustment.index');

        Route::post('/stock-adjustment', [StockAdjustmentController::class, 'store'])
            ->name('stock-adjustment.store');


        /*
        |--------------------------------------------------------------------------
        | LAPORAN PENJUALAN
        |--------------------------------------------------------------------------
        */

        Route::get('/laporan', [TransaksiController::class, 'laporan'])
            ->name('laporan');


        /*
        |--------------------------------------------------------------------------
        | LAPORAN STOK
        |--------------------------------------------------------------------------
        */

        Route::get('/laporan-stok', [LaporanController::class, 'stok'])
            ->name('laporan.stok');


        /*
        |--------------------------------------------------------------------------
        | PENGATURAN
        |--------------------------------------------------------------------------
        */

        Route::get('/pengaturan', function () {

            return view('pengaturan', [
                'namaApotek' => session('nama_apotek', 'Apotek Besok Sembuh'),
                'nomorTelepon' => session('nomor_telepon', ''),
                'batasStok' => session('batas_stok', 20),
            ]);

        })->name('pengaturan');


        /*
        |--------------------------------------------------------------------------
        | SIMPAN PROFIL ADMIN
        |--------------------------------------------------------------------------
        */

        Route::post('/pengaturan/profil', function () {

            $request = request();

            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $user = auth()->user();

            $user->name = $request->name;
            $user->save();

            return redirect()
                ->route('pengaturan')
                ->with('success_profil', 'Profil admin berhasil diperbarui.');

        })->name('pengaturan.profil');


        /*
        |--------------------------------------------------------------------------
        | SIMPAN INFORMASI APOTEK
        |--------------------------------------------------------------------------
        */

        Route::post('/pengaturan/apotek', function () {

            $request = request();

            $request->validate([
                'nama_apotek' => 'required|string|max:255',
                'nomor_telepon' => 'nullable|string|max:30',
            ]);

            session([
                'nama_apotek' => $request->nama_apotek,
                'nomor_telepon' => $request->nomor_telepon,
            ]);

            return redirect()
                ->route('pengaturan')
                ->with('success_apotek', 'Informasi apotek berhasil disimpan.');

        })->name('pengaturan.apotek');


        /*
        |--------------------------------------------------------------------------
        | SIMPAN BATAS STOK
        |--------------------------------------------------------------------------
        */

        Route::post('/pengaturan/stok', function () {

            $request = request();

            $request->validate([
                'batas_stok' => 'required|integer|min:0',
            ]);

            session([
                'batas_stok' => $request->batas_stok,
            ]);

            return redirect()
                ->route('pengaturan')
                ->with('success_stok', 'Batas stok berhasil diperbarui.');

        })->name('pengaturan.stok');


        /*
        |--------------------------------------------------------------------------
        | UBAH PASSWORD
        |--------------------------------------------------------------------------
        */

        Route::post('/pengaturan/password', function () {

            $request = request();

            $request->validate([
                'password_lama' => 'required',
                'password_baru' => 'required|string|min:8|confirmed',
            ]);

            $user = auth()->user();

            if (!Hash::check($request->password_lama, $user->password)) {
                return back()
                    ->withErrors([
                        'password_lama' => 'Password lama tidak sesuai.'
                    ])
                    ->withInput();
            }

            $user->password = Hash::make($request->password_baru);
            $user->save();

            return redirect()
                ->route('pengaturan')
                ->with('success_password', 'Password berhasil diubah.');

        })->name('pengaturan.password');


        /*
        |--------------------------------------------------------------------------
        | ADMIN USER
        |--------------------------------------------------------------------------
        */

        Route::get('/users', [UserController::class, 'index'])
            ->name('users.index');

        Route::get('/users/create', [UserController::class, 'create'])
            ->name('users.create');

        Route::post('/users', [UserController::class, 'store'])
            ->name('users.store');

        Route::get('/users/{user}/edit', [UserController::class, 'edit'])
            ->name('users.edit');

        Route::put('/users/{user}', [UserController::class, 'update'])
            ->name('users.update');

        Route::patch('/users/{user}', [UserController::class, 'update']);

        Route::delete('/users/{user}', [UserController::class, 'destroy'])
            ->name('users.destroy');

    });

});