<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenulisRizki extends Model
{
    protected $table = 'penulisrizki';

    protected $fillable = [
        'nama'
    ];

    public function BukuRizki()
    {
        return $this->belongsToMany(BukuRizki::class, 'relasi_buku_penulis_rizki', 'id_penulis', 'id_buku');
    }
}
