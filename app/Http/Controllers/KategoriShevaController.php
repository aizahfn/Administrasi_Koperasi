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
        $kategorisheva = KategoriSheva::latest()->paginate(5);
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

        return redirect()->route('kategorisheva')
                        ->with('Success!','Kategori Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriSheva $kategorisheva): View
    {
        return view('kategorisheva.show',compact('kategorisheva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriSheva $kategorisheva): View
    {
        return view('kategorisheva.edit',compact('kategorisheva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriSheva $kategorisheva): RedirectResponse
    {
        $request->validate([
            'NamaKategori' => 'required',
        ]);

        $input = $request->all();

        $kategorisheva->update($input);

        return redirect()->route('kategorisheva')
                        ->with('Success!','Kategori Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriSheva $kategorisheva): RedirectResponse
    {
        $kategorisheva->delete();

        return redirect()->route('kategorisheva')
                        ->with('Success!','Kategori Deleted Successfully');
    }
}
