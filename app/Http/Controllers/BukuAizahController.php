<?php

namespace App\Http\Controllers;

use App\Models\BukuAizah;
//use App\Models\Peminjam;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BukuAizahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
    //     $namapeminjam = peminjam::select('id', 'nama')->get();
        $bukuaizahs = bukuaizah::latest()->paginate(5);
        
        return view('bukuaizah.index',compact('bukuaizahs'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('bukuaizah.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'IDBuku' => 'required',
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'TahunTerbit' => 'required',
            'JumlahStok' => 'required',
            'dendabuku' => 'required',
        ]);

        $input = $request->all();

        bukuaizah::create($input);

        return redirect()->route('bukuaizah.index')
        ->with('success','BukuAizah created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BukuAizah $bukuaizah)
    {
        return view('bukuaizah.show',compact('bukuaizah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bukuaizah $bukuaizah)
    {
        // $peminjam = peminjam::select('id', 'nama')->get();
        return view('bukuaizah.edit',compact('bukuaizah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bukuaizah $bukuaizah)
    {
        $request->validate([
            'Judul' => 'required',
            // 'namapeminjam' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'TahunTerbit' => 'required',
            'JumlahStok' => 'required',
            'dendabuku' => 'required',
        ]);

        $input = $request->all();

        $bukuaizah->update($input);
      
        return redirect()->route('bukuaizah.index')
                        ->with('success','BukuAizah updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bukuaizah $bukuaizah)
    {
        $bukuaizah->delete();
         
        return redirect()->route('bukuaizah.index')
                        ->with('success','BukuAizah deleted successfully');
    }
}
