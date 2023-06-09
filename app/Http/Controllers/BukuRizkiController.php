<?php

namespace App\Http\Controllers;

use App\Models\BukuRizki;
use App\Models\RelasiBukuPenulisRizki;
use Illuminate\Http\Request;

class BukuRizkiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $bukus = BukuRizki::latest()->paginate(5);
        $buku = BukuRizki::join('relasi_buku_penulis_rizki', 'relasi_buku_penulis_rizki.id_buku', '=', 'bukurizki.id_buku')
        ->join('penulisrizki', 'penulisrizki.id_penulis', '=', 'relasi_buku_penulis_rizki.id_penulis')
        ->join('relasibukukategoririzki', 'relasibukukategoririzki.IDBuku', '=', 'bukurizki.id_buku')
        ->join('kategoririzki', 'kategoririzki.IDKategori', '=', 'relasibukukategoririzki.IDKategori')
        // ->selectRaw('bukurizki.*, penulis.nama', 'kategoririzki.NamaKategori')
        // ->orderBy('bukurizki.id_buku', 'desc')
        // ->latest()
        ->paginate(5);
        // $penulis = RelasiBukuPenulisRizki::join('bukurizki', 'bukurizki.id_buku', '=', 'relasi_buku_penulis_rizki.id_buku')
        // ->join('penulis', 'penulis.id_penulis', '=', 'relasi_buku_penulis_rizki.id_penulis')
        // ->selectRaw('penulis.nama as nama_penulis, relasi_buku_penulis_rizki.id_buku as id_buku')
        // ->get();
        // $kategori = RelasiBukuKategoriRizki::join('bukurizki', 'bukurizki.id_buku', '=', 'relasi_buku_penulis_rizki.id_buku')
        // ->join('penulis', 'penulis.id_penulis', '=', 'relasi_buku_penulis_rizki.id_penulis')
        // ->selectRaw('penulis.nama as nama_penulis, relasi_buku_penulis_rizki.id_buku as id_buku')
        // ->get();
        return view('rizki.buku.index',compact('buku'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rizki.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'thn_terbit' => 'required',
        ]);

        BukuRizki::create($request->all());

        return redirect()->route('buku.index')
                        ->with('success','BukuRizki created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuRizki $buku)
    {
        return view('rizki.buku.edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuRizki $buku)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'thn_terbit' => 'required',
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index')
                        ->with('success','BukuRizki updated successfully');
    }

    public function destroy(BukuRizki $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index')
                        ->with('success','BukuRizki deleted successfully');
    }
}
