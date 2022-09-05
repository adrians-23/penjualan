<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    //ini ditambahkan jika nama tabel kita tidak jamak (dalam bahasa inggris)
    protected $table = 'supplier'; 

    //ini jika kita menggunakan Eloquent ORM
    protected $guarded = [];
}
