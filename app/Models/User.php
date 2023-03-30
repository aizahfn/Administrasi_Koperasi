<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = [
        'id_berkas',
        'role',
        'nama_lengkap',
        'no_telp',
        'jabatan',
        'email',
        'password',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir',
    ];
}
