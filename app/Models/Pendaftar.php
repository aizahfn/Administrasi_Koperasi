<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = "pendaftar";
    protected $fillable = [
        'nama_lengkap',
        'no_telp',
        'jabatan',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir',
        'email',
        'password',
        'ktp',
        'ktm',
        's_pernyataan'
    ];
}
