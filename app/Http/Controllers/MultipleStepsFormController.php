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

        $user->fill($validatedData);

        return redirect()->route('pages.berkas.create',['id_user' => $user->id]);
    }

    public function createStepTwo(Request $request)
    {
        $user = $request->session()->get('user');
        return view('pages.berkas.create', compact('user'));
    }

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'ktp'            => 'required|image|mimes:jpeg,jpg,png|max:10000',
            'ktm'            => 'required|image|mimes:jpeg,jpg,png|max:10000',
            's_pernyataan'   => 'required|image|mimes:jpeg,jpg,png|max:10000'
        ]);

        $user = $request->session()->get('user');

        if (!$user) {
            return redirect()->route('pages.user.create');
        }

        $berkas = new Berkas();
        $berkas->fill($validatedData);
        $berkas->id_user = $user->id;
        $request->session()->put('berkas', $berkas);
        return redirect()->route('pages.review',['id_user' => $user->id]);
    }

    public function createStepThree(Request $request)
    {
        $user = $request->session()->get('user');
        $berkas = $request->session()->get('berkas');

        if (!$user || !$berkas) {
            return redirect()->route('pages.user.create');
        }

        return view('pages.review', compact('user', 'berkas'));
    }

    public function postCreateStepThree(Request $request)
    {
        $user = $request->session()->get('user');
        $berkas = $request->session()->get('berkas');

        // Save user and berkas to database
        $user->save();
        $berkas->save();

        // Clear session data
        $request->session()->forget('user');
        $request->session()->forget('berkas');

        return redirect()->route('pages.datalowongan.data-lowongan')
            ->with('success','Data Pendaftaran Berhasil Disimpan, Mohon Tunggu Konfirmasi Selanjutnya');
    }
}
