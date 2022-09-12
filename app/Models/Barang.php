<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\Kategori;
use App\Models\Pembelian;
use App\Models\Penjualan;

class Barang extends Model
{
    use HasFactory;
    //ini ditambahkan jika nama tabel kita tidak jamak (dalam bahasa inggris)
    protected $table = 'barang';

    //ini jika kita menggunakan Eloquent ORM
    protected $guarded = [];

    public function Supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function Kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function Pembelian(){
        return $this->hasMany(Pembelian::class);
    }

    public function Penjualan(){
        return $this->hasMany(Penjualan::class);
    }
}
