<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuaizah extends Model
{
    use HasFactory;

    protected $fillable = [
        'IDBuku','Judul', 'Penulis', 'Penerbit', 'TahunTerbit', 'JumlahStok', 'dendabuku'
    ];

    // public static function Join() {
    //     $data = DB::table('bukuaizahs')
    //         ->join('peminjams', 'bukus.namapeminjam', 'peminjams.id')
    //         ->select('bukus.*', 'peminjams.nama as nama')
    //         ->get();
    // }
}
