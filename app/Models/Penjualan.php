<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\Pembeli;

class Penjualan extends Model
{
    use HasFactory;
    //ini ditambahkan jika nama tabel kita tidak jamak (dalam bahasa inggris)
    protected $table = 'penjualan'; 

    //ini jika kita menggunakan Eloquent ORM
    protected $guarded = [];

    public function Barang(){
        return $this->belongsTo(Barang::class);
    }

    public function Pembeli(){
        return $this->belongsTo(Pembeli::class);
    }
}
