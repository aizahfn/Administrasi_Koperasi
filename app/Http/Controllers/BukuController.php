<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::latest()->paginate(5);
        $penulis = RelasiPenulis::join('buku', 'buku.id_buku', '=', 'relasipenulis.id_buku')
        // ->selectRaw('user.*, datalowongan.nama_lowongan')
        ->join('penulis', 'penulis.id_penulis', '=', 'relasipenulis.id_penulis')
        ->get();
        return view('rizki.buku.index',compact('bukus'))
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

        Buku::create($request->all());

        return redirect()->route('buku.index')
                        ->with('success','Buku created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('rizki.buku.edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'thn_terbit' => 'required',
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index')
                        ->with('success','Buku updated successfully');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index')
                        ->with('success','Buku deleted successfully');
    }
}
