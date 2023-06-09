<?php

namespace App\Http\Controllers;

use App\Models\KategoriAizah;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class KategoriAizahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $kategoriaizahs = kategoriaizah::latest()->paginate(5);
        
        return view('kategoriaizah.index',compact('kategoriaizahs'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('kategoriaizah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'IDKategori' => 'required',
            'NamaKategori' => 'required',
        ]);

        $input = $request->all();

        kategoriaizah::create($input);

        return redirect()->route('kategoriaizah.index')
        ->with('success','Kategori Aizah created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(kategoriaizah $kategoriaizah)
    {
        return view('kategoriaizah.show',compact('kategoriaizah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategoriaizah $kategoriaizah)
    {
        return view('kategoriaizah.edit',compact('kategoriaizah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategoriaizah $kategoriaizah)
    {
        $request->validate([
            'IDKategori' => 'required',
            'NamaKategori' => 'required'
        ]);

        $input = $request->all();

        $kategoriaizah ->update($input);
      
        return redirect()->route('kategoriaizah.index')
                        ->with('success','Kategori Aizah updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategoriaizah $kategoriaizah)
    {
        $kategoriaizah->delete();
         
        return redirect()->route('kategoriaizah.index')
                        ->with('success','Kategori Aizah deleted successfully');
    }
}
