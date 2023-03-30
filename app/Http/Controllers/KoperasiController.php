<?php

namespace App\Http\Controllers;

use App\Models\koperasi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;


class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        //get koperasis
        $koperasis = Koperasi::latest()->paginate(5);

        //render view with koperasis
        return view('koperasi\index', compact('koperasis'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('koperasis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'no_registrasi' => 'required',
            'nama_koperasi' => 'required',
            'alamat_koperasi' => 'required',
            'notelepon_koperasi' => 'required',
            'email_koperasi' => 'required',
            'jenis_produk' => 'required',
            'jumlah_anggota' => 'required',
        ]);

        $input = $request->all();

        Koperasi::create($input);
       
        return redirect()->route('koperasi\index')
                        ->with('success','koperasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Koperasi $koperasi): View
    {
        return view('koperasis.show',compact('koperasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Koperasi $koperasi): View
    {
        return view('koperasis.edit',compact('koperasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Koperasi $koperasi): RedirectResponse
    {
        $request->validate([
            'no_registrasi' => 'required',
            'nama_koperasi' => 'required',
            'alamat_koperasi' => 'required',
            'notelepon_koperasi' => 'required',
            'email_koperasi' => 'required',
            'jenis_produk' => 'required',
            'jumlah_anggota' => 'required',
        ]);

        $input = $request->all();
            
        $lowongan->update($input);
      
        return redirect()->route('koperasi\index')
                        ->with('success','Koperasi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Koperasi $koperasi): RedirectResponse
    {
        $Koperasi->delete();

        return redirect()->route('koperasi\index')
                        ->with('success','Koperasi deleted successfully');
    }
    
}