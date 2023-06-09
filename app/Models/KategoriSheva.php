<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSheva extends Model
{
    use HasFactory;

    protected $table ='kategorisheva';
    protected $fillable = [
        'NamaKategori',
    ];

    public function buku(){
        return $this->belongsTo(BukuSheva::class, 'IDKategoriBuku');
    }
}
