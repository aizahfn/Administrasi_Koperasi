<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalan;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PenjadwalanController extends Controller
{
    public function index(): View
    {

    $penjadwalans = Penjadwalan::latest()->paginate(5);

    return view('penjadwalans.index', compact('penjadwalans'))
                ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function create(): View
    {
        $penjadwalans = Penjadwalan::all();
        return view('penjadwalans.create', compact('penjadwalans'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'kategori'       => 'required',
            'tanggal_jadwal'   => 'required',
            'deskripsi_jadwal' => 'required'
        ]);

        //create post
        Penjadwalan::create([
            'kategori'  => $request->kategori,
            'tanggal_jadwal'    => $request->tanggal_jadwal,
            'deskripsi_jadwal'  => $request->deskripsi_jadwal
        ]);

        return redirect()->route('penjadwalans')->with(['success' => 'Penjadwalan Berhasil!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $penjadwalans = Penjadwalan::findOrFail($id);

        //delete post
        $penjadwalans->delete();

        //redirect to index
        return redirect()->route('penjadwalans')->with(['success' => 'Penjadwalan Berhasil Dihapus!']);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'kategori'       => 'required',
            'tanggal_jadwal'   => 'required',
            'deskripsi_jadwal' => 'required'
        ]);

        //get post by ID
        $penjadwalans = Penjadwalan::findOrFail($id);

        $penjadwalans->update([
            'kategori'  => $request->kategori,
            'tanggal_jadwal'    => $request->tanggal_jadwal,
            'deskripsi_jadwal'  => $request->deskripsi_jadwal
        ]);
        //redirect to index
        return redirect()->route('penjadwalans')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function edit($id): View
    {
        //get post by ID
        $penjadwalans = Penjadwalan::findOrFail($id);

        return view('edit', compact(['penjadwalans']));
    }
}
