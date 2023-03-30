<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arsip extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'no_dokumen',
        'nama_dokumen',
        'kategori_dokumen',
        'tanggal_dokumen',
        'isi_dokumen',
        'sumber_dokumen',
        'penerima_dokumen',
        'status_dokumen',
        'aksesibilitas_dokumen',
    ];
}