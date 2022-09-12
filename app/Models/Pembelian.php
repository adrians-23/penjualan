<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Pembelian extends Model
{
    use HasFactory;
    //ini ditambahkan jika nama tabel kita tidak jamak (dalam bahasa inggris)
    protected $table = 'pembelian'; 

    //ini jika kita menggunakan Eloquent ORM
    protected $guarded = [];

    public function Barang(){
        return $this->belongsTo(Barang::class);
    }
}
