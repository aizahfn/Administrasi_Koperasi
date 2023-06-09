<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    use HasFactory;

    protected $table = "penjadwalans";
    protected $fillable = [
        'agenda',
        'tanggal_jadwal',
        'deskripsi_jadwal',
        'tujuan_jadwal'
    ];
}
