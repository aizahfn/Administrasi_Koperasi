<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelasiBukuPenulisRizki extends Model
{
    protected $table ='relasi_buku_penulis_rizki';

    protected $fillable = [
        'id_penulis',
        'id_buku',
    ];
}
