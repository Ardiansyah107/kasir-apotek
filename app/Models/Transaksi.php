<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $fillable = [
        'kode_transaksi',
        'user_id',
        'tanggal_transaksi',
        'subtotal',
        'diskon',
        'total_harga',
        'metode_pembayaran',
        'jumlah_bayar',
        'kembalian',
    ];

    protected $casts = [
        'tanggal_transaksi' => 'datetime',
        'subtotal' => 'decimal:2',
        'diskon' => 'decimal:2',
        'total_harga' => 'decimal:2',
        'jumlah_bayar' => 'decimal:2',
        'kembalian' => 'decimal:2',
    ];

    public function detail()
    {
        return $this->hasMany(DetailTransaksi::class, 'transaksi_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}