<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuSheva extends Model
{
    use HasFactory;

    protected $table ='bukusheva';
    protected $fillable = [

        'Judul',
        'Penulis',
        'Penerbit',
        'TahunTerbit',
        'JumlahStok',
        'DendaBuku'
    ];

    public function kategori(){
        return $this->hasMany(KategoriSheva::class);
    }
}
