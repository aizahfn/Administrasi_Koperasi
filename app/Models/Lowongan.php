<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    public $table = "datalowongan";

    protected $fillable = [
        'nama_lowongan', 'image', 'tanggal_lowongan', 'jumlah_lowongan', 'deskripsi_lowongan'
    ];
}
