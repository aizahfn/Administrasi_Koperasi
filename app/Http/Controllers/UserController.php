<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Berkas;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Lowongan;

class UserController extends Controller
{
    public function index(): View
    {

    $users = User::join('datalowongan', 'datalowongan.id', '=', 'user.jabatan')
    ->orderBy('user.created_at', 'asc')
    ->orderBy('datalowongan.created_at', 'asc')
    ->latest('user.created_at')
    ->selectRaw('user.*, datalowongan.nama_lowongan')
    ->paginate(10);

        return view('user.index', compact('users'));
    }
    public function create(): View
    {
        $lowongan = Lowongan::all();
    return view('user.create', compact('lowongan'));
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
        User::create([
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

        //delete image
        // Storage::delete('public/posts/'. $post->image);

        //delete post
        $user->delete();

        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            // 'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            // 'id_berkas'     => 'required',
            // 'role'          => 'required',
            'nama_lengkap'  => 'required',
            'no_telp'       => 'required',
            'jabatan'       => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'alamat'        => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            // 'title'     => 'required',
            // 'content'   => 'required|min:10'
        ]);

        //get post by ID
        $user = User::findOrFail($id);

        $user->update([
            // 'id_berkas'     => $request->id_berkas,
            // 'role'          => $request->role,
            'nama_lengkap'  => $request->nama_lengkap,
            'no_telp'       => $request->no_telp,
            'jabatan'       => $request->jabatan,
            'email'         => $request->email,
            'password'      => $request->password,
            'alamat'        => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir
            // 'image'     => $image->hashName(),
            // 'title'     => $request->title,
            // 'content'   => $request->content
        ]);
        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function edit($id): View
    {
        //get post by ID
        $user = User::findOrFail($id);
        $berkas = Berkas::all();

        return view('user.edit', compact(['user', 'berkas']));
    }


}
