<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('pages.profile');
    }

    public function update()
    {
<<<<<<< HEAD

        $user = request()->user();
        $attributes = request()->validate([
            'nama_lengkap'  => 'required',
            'no_telp'       => 'required',
            'jabatan'       => 'required',
            'email'         => 'required|email|unique:users,email,'.$user->id,
            'alamat'        => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',


=======
            
        $user = request()->user();
        $attributes = request()->validate([
>>>>>>> 4d56dc791a5a919e3c0705cf0adf5aad46aa1eb7
            'email' => 'required|email|unique:users,email,'.$user->id,
            'name' => 'required',
            'phone' => 'required|max:10',
            'about' => 'required:max:150',
            'location' => 'required'
        ]);

        auth()->user()->update($attributes);
        return back()->withStatus('Profile successfully updated.');
<<<<<<< HEAD

=======
    
>>>>>>> 4d56dc791a5a919e3c0705cf0adf5aad46aa1eb7
}
}
