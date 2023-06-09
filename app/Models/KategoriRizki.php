<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KategoriRizki extends Model
{
    protected $table ='kategoririzki';

    protected $fillable = [
        'NamaKategori'
    ];

    public function buku(){
        return $this->belongsTo(BukuRizki::class, 'ID_Buku');
    }

}
