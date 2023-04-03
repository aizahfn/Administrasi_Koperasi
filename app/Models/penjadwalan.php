<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_jadwal',
        'jadwal_rapat',
       'jadwal_shift',
        'jadwal_lain',
        'agenda_jadwal',
        'tanggal_jadwal',
        'deskripsi_jadwal',
        'tujuan_jadwal',
    ];
}