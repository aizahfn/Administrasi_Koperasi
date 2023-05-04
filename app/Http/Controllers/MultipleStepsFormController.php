<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

use App\Models\User;
use App\Models\Berkas;
use App\Models\Lowongan;

class MultipleStepsFormController extends Controller
{
    public function index(): View
    {
        $datalowongan = Lowongan::latest()->paginate(5);

        return view('pages.datalowongan.data-lowongan',compact('datalowongan'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function createStepOne(Request $request)
    {
        $user = $request->session()->get('user');

        return view('pages.user.create', compact('user'));
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap'  => 'required',
            'no_telp'       => 'required',
            'jabatan'       => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'alamat'        => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        if(empty($request->session()->get('user'))){
            $user = new User();
            $user->fill($validatedData);
            $request->session()->put('user', $user);
        }else{
            $user = $request->session()->get('user');
            $user->fill($validatedData);
            $request->session()->put('user', $user);
        }

        return redirect()->route('pages.berkas.create');
    }

    public function createStepTwo(Request $request)
    {
        $user = $request->session()->get('user');
        $berkas = Berkas::all();

        return view('pages.berkas.create', compact('user', 'berkas'));
    }

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'ktp'           => 'required',
            'ktm'           => 'required',
            's_pernyataan'  => 'required',
        ]);

            $user = $request->session()->get('user');
            $user->fill($validatedData);
            $request->session()->put('user', $user);
        }

        return redirect()->route('pages.konfirmasi');
    }

    public function createStepThree(Request $request)
    {
        $user = $request->session()->get('user');
        $berkas = Berkas::all();

        return view('pages.konfirmasi', compact('user', 'berkas'));
    }

    public function postCreateStepThree(Request $request)
    {
        $user = $request->session()->get('user');
        $user->save();

        $request->session()->forget('user');

        return redirect()->route('pages.datalowongan.data-lowongan');
    }
}
