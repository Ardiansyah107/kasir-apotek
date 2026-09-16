<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->after('kode_transaksi');
            $table->dateTime('tanggal_transaksi')->nullable()->after('user_id');
            $table->decimal('subtotal', 12, 2)->default(0)->after('tanggal_transaksi');
            $table->decimal('diskon', 12, 2)->default(0)->after('subtotal');
            $table->string('metode_pembayaran')->default('Cash')->after('total_harga');
            $table->decimal('jumlah_bayar', 12, 2)->default(0)->after('metode_pembayaran');
            $table->decimal('kembalian', 12, 2)->default(0)->after('jumlah_bayar');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['user_id']);

            $table->dropColumn([
                'user_id',
                'tanggal_transaksi',
                'subtotal',
                'diskon',
                'metode_pembayaran',
                'jumlah_bayar',
                'kembalian',
            ]);
        });
    }
};