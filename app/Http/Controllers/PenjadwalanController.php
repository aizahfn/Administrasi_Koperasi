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

        return view('penjadwalans.index', compact('penjadwalans'));
    }
    public function create(): View
    {
        $penjadwalan = Penjadwalan::all();
        return view('penjadwalans.create', compact('penjadwalan'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_lengkap'  => 'required',
            'no_telp'       => 'required',
            'jabatan'       => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'alamat'        => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        //create post
        Penjadwalan::create([
            'nama_lengkap'  => $request->nama_lengkap,
            'no_telp'       => $request->no_telp,
            'jabatan'       => $request->jabatan,
            'email'         => $request->email,
            'password'      => $request->password,
            'alamat'        => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        return redirect()->route('user.index')->with(['success' => 'Pendaftaran Berhasil, Mohon Menunggu Proses Verifikasi!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $user = User::findOrFail($id);

        //delete post
        $user->delete();

        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_lengkap'  => 'required',
            'no_telp'       => 'required',
            'jabatan'       => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'alamat'        => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        //get post by ID
        $user = User::findOrFail($id);

        $user->update([
            'nama_lengkap'  => $request->nama_lengkap,
            'no_telp'       => $request->no_telp,
            'jabatan'       => $request->jabatan,
            'email'         => $request->email,
            'password'      => $request->password,
            'alamat'        => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);
        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function edit($id): View
    {
        //get post by ID
        $penjadwalan = Penjadwalan::findOrFail($id);

        return view('penjadwalan.edit', compact(['penjadwalan']));
    }
}
