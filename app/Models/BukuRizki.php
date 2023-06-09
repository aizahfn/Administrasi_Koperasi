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

    public function kategori()
    {
        return $this->hasMany(KategoriRizki::class);
    }
}
