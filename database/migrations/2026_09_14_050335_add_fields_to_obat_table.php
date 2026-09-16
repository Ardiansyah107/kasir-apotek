<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('obat', function (Blueprint $table) {
            $table->string('barcode')->nullable()->unique()->after('kode_obat');
            $table->unsignedBigInteger('kategori_id')->nullable()->after('nama_obat');
            $table->string('satuan')->default('pcs')->after('kategori');
            $table->integer('minimum_stok')->default(5)->after('stok');
            $table->string('status')->default('aktif')->after('tanggal_kadaluarsa');
        });
    }

    public function down(): void
    {
        Schema::table('obat', function (Blueprint $table) {
            $table->dropColumn([
                'barcode',
                'kategori_id',
                'satuan',
                'minimum_stok',
                'status',
            ]);
        });
    }
};