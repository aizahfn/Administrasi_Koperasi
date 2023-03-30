<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): View
    {
        $user = User::latest()->paginate(5);

        return view('user.index', compact('user'));
    }
    public function create(): View
    {
        return view('user.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            // 'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',

            'role'          => 'required',
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

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        User::create([
            'id_berkas'     => 1,
            'role'          => $request->role,
            'nama_lengkap'  => $request->nama_lengkap,
            'no_telp'       => $request->no_telp,
            'jabatan'       => $request->jabatan,
            'email'         => $request->email,
            'password'      => $request->password,
            'alamat'        => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            // 'image'     => $image->hashName(),
            // 'title'     => $request->title,
            // 'content'   => $request->content
        ]);

        //redirect to index
        // return redirect()->route('user.index', ['success' => 'Data Berhasil Disimpan!']);
        // return redirect('/user')->with('status', 'Profile updated!');
        // return redirect('/user');
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
}
