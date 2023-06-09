<?php

namespace App\Http\Controllers;

use App\Models\KategoriSheva;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class KategoriShevaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $kategoriSheva = KategoriSheva::latest()->paginate(5);
        return view('kategorisheva.index',compact('kategorisheva'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('kategorisheva.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'NamaKategori' => 'required',
        ]);

        $input = $request->all();

        KategoriSheva::create($input);

        return redirect()->route('kategorisheva.index')
                        ->with('Success!','Kategori Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriSheva $kategoriSheva): View
    {
        return view('kategorisheva.show',compact('kategorisheva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriSheva $kategoriSheva): View
    {
        return view('kategorisheva.edit',compact('kategorisheva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriSheva $kategoriSheva): RedirectResponse
    {
        $request->validate([
            'NamaKategori' => 'required',
        ]);

        $input = $request->all();

        $kategoriSheva->update($input);

        return redirect()->route('kategorisheva.index')
                        ->with('Success!','Kategori Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriSheva $kategoriSheva): RedirectResponse
    {
        $kategoriSheva->delete();

        return redirect()->route('kategorisheva.index')
                        ->with('Success!','Kategori Deleted Successfully');
    }
}
