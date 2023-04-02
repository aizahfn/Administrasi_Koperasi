<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use Illuminate\Support\Facades\Storage;
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
            'ktp'            => 'required|image|mimes:jpeg,jpg,png|max:10000',
            'ktm'            => 'required|image|mimes:jpeg,jpg,png|max:10000',
            's_pernyataan'   => 'required|image|mimes:jpeg,jpg,png|max:10000'
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

    public function destroy($id): RedirectResponse
    {
        //get data berkas by ID
        $berkas = Berkas::findOrFail($id);


        //delete image
        Storage::delete('public/uploadan/'. $berkas->ktp);
        Storage::delete('public/uploadan/'. $berkas->ktm);
        Storage::delete('public/uploadan/'. $berkas->s_pernyataan);

        //delete data berkas
        $berkas->delete();

        //redirect to index
        return redirect()->route('berkas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function show(string $id): View
    {
        $berkas = Berkas::findOrFail($id);

        return view('berkas.show', compact('berkas'));
    }

    public function update(Request $request, $id): RedirectResponse
    {

        //get post by ID
        $berkas = Berkas::findOrFail($id);

        //check if image is uploaded
            if ($request->hasFile('ktp')) {

                //upload new image
                $image = $request->file('ktp');
                $image->storeAs('public/uploadan', $image->hashName());

                if ($berkas->ktp)
                    //delete old image
                    Storage::delete('public/uploadan/'.$berkas->ktp);



                //update post with new image
                $berkas->update([
                    'ktp'     => $image->hashName()
                ]);

            }
            if ($request->hasFile('ktm')) {

                //upload new image
                $image = $request->file('ktm');
                $image->storeAs('public/uploadan', $image->hashName());

                if ($berkas->ktm)
                    //delete old image
                    Storage::delete('public/uploadan/'.$berkas->ktm);

                //update post with new image
                $berkas->update([
                    'ktm'     => $image->hashName()
                ]);
            }
            if ($request->hasFile('s_pernyataan')) {

                //upload new image
                $image = $request->file('s_pernyataan');
                $image->storeAs('public/uploadan', $image->hashName());

                if ($berkas->s_pernyataan)
                    //delete old image
                    Storage::delete('public/uploadan/'.$berkas->s_pernyataan);

                //update post with new image
                $berkas->update([
                    's_pernyataan'     => $image->hashName()
                ]);
            }


        //redirect to index
        return redirect()->route('berkas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function edit($id): View
    {
        $berkas = Berkas::findOrFail($id);

        return view('berkas.edit', compact('berkas'));
    }
}
