<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuRizki extends Model
{
    protected $table ='bukurizki';

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'thn_terbit'
    ];

    public function penulis()
    {
        return $this->belongsToMany(PenulisRizki::class, 'relasi_buku_penulis', 'id_buku', 'id_penulis');
    }

    public function kategori()
    {
        return $this->belongsToMany(KategoriRizki::class, 'relasi_buku_kategori_rizki', 'id_buku', 'id_kategori');
    }
}
