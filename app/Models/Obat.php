<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';

    protected $fillable = [
        'kode_obat',
        'barcode',
        'nama_obat',
        'kategori_id',
        'kategori',
        'satuan',
        'harga_beli',
        'harga_jual',
        'stok',
        'minimum_stok',
        'tanggal_kadaluarsa',
        'status',
    ];

    public function kategoriData()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function stockAdjustments()
    {
        return $this->hasMany(StockAdjustment::class, 'obat_id');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'obat_id');
    }
}