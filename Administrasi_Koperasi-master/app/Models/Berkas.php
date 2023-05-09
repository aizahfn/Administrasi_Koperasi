<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;
    protected $table ='berkas';
    protected $fillable = [

        'ktp',
        'ktm',
        's_pernyataan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
