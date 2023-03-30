<?php

namespace App\Http\Controllers;

use App\Models\Berkas;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BerkasController extends Controller
{
    public function index(): View
    {
        $berkas = Berkas::latest()->paginate(5);

        return view('berkas.index', compact('berkas'));
    }

    public function create(): View
    {
        return view('berkas.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'ktp'            => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'ktm'            => 'required|image|mimes:jpeg,jpg,png|max:2048',
            's_pernyataan'   => 'required|image|mimes:jpeg,jpg,png|max:2048'
            // 's_pernyataan'   => 'required|min:10'
        ]);

        //get req image
        $ktp            = $request->file('ktp');
        $ktm            = $request->file('ktm');
        $s_pernyataan   = $request->file('s_pernyataan');
        //upload image
        $ktp            ->storeAs('public/uploadan', $ktp->hashName());
        $ktm            ->storeAs('public/uploadan', $ktm->hashName());
        $s_pernyataan   ->storeAs('public/uploadan', $s_pernyataan->hashName());

        //create post
        Berkas::create([
            // 'image'     => $image->hashName(),
            'ktp'           => $ktp->hashName(),
            'ktm'           => $ktm->hashName(),
            's_pernyataan'  => $s_pernyataan->hashName()
            // 's_pernyataan'  => $request->s_pernyataan
        ]);

        //redirect to index
        return redirect()->route('berkas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
