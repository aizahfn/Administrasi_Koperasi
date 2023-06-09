<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuAhnaf extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'penulis', 'penerbit', 'tahunterbit', 'jumlahstok', 'dendabuku'
    ];

}