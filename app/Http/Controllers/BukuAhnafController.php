<?php

namespace App\Http\Controllers;

use App\Models\BukuAhnaf;
//use App\Models\Peminjam;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BukuAhnafController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $buku_ahnafs = BukuAhnaf::latest()->paginate(5);
        
        return view('bukuanab.index',compact('buku_ahnafs'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('bukuanab.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required',
            'jumlahstok' => 'required',
            'dendabuku' => 'required',
        ]);

        $input = $request->all();

        BukuAhnaf::create($input);

        return redirect()->route('bukuanab.index')
        ->with('success','BukuAhnaf created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BukuAhnaf $bukuanab): View
    {
        return view('bukuanab.show',compact('bukuanab'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuAhnaf $bukuanab): View
    {
        // $peminjam = peminjam::select('id', 'nama')->get();
        return view('bukuanab.edit',compact('bukuanab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuAhnaf $bukuanab)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required',
            'jumlahstok' => 'required',
            'dendabuku' => 'required',
        ]);

        $input = $request->all();

        $bukuanab->update($input);
      
        return redirect()->route('bukuanab.index')
                        ->with('success','BukuAhnaf updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukuAhnaf $bukuanab)
    {
        $bukuanab->delete();
         
        return redirect()->route('bukuanab.index')
                        ->with('success','BukuAhnaf deleted successfully');
    }
}