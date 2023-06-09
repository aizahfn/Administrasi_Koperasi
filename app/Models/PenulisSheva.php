<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenulisSheva extends Model
{
    protected $table = 'penulissheva';

    protected $fillable = [
        'NamaPenulis'
    ];

    public function penulis()
    {
        return $this->belongsTo(BukuSheva::class, 'IDPenulisBuku');
    }
}
