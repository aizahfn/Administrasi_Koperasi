<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;

     protected $fillable = [
        'no_registrasi', 'nama_koperasi', 'alamat_koperasi', 'notelepon_koperasi', 'email_koperasi', 'jenis_produk', 'jumlah_anggota',
     ];
}
