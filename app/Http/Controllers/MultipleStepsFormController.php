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
    public function lowongan(): View
    {
        $datalowongan = Lowongan::latest()->paginate(5);

        return view('pages.pendaftaran.lowongan',compact('datalowongan'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function createStepOne(Request $request)
    {
        $user = $request->session()->get('user');

        return view('pages.pendaftaran.biodata', compact('user'));
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

        $user = new User();
        $user->fill($validatedData);
        $request->session()->put('user', $user);

        return redirect()->route('pages.pendaftaran.berkas');
    }

    public function createStepTwo(Request $request)
    {
        $user = $request->session()->get('user');
        return view('pages.pendaftaran.berkas', compact('user'));
    }

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'ktp' => 'required|image|mimes:jpeg,jpg,png|max:10000',
            'ktm' => 'required|image|mimes:jpeg,jpg,png|max:10000',
            's_pernyataan' => 'required|image|mimes:jpeg,jpg,png|max:10000'
        ]);

        $user = $request->session()->get('user');

        if (!$user) {
            return redirect()->route('pages.pendaftaran.biodata');
        }

        $berkas = new Berkas();

        // Save the uploaded files to a file path
        $berkas->ktp = $validatedData['ktp']->store('berkas');
        $berkas->ktm = $validatedData['ktm']->store('berkas');
        $berkas->s_pernyataan = $validatedData['s_pernyataan']->store('berkas');

        $berkas->id_user = $user->id;
        $request->session()->put('berkas', $berkas);
        return redirect()->route('pages.review');
    }

    public function createStepThree(Request $request)
    {
        $user = $request->session()->get('user');
        $berkas = $request->session()->get('berkas');

        if (!$user || !$berkas) {
            return redirect()->route('pages.user.create');
        }

        return view('pages.pendaftaran.review', compact('user', 'berkas'));
    }

    public function postCreateStepThree(Request $request)
    {
        $user = $request->session()->get('user');
        $berkas = $request->session()->get('berkas');

        if (!$user || !$berkas) {
            return redirect()->route('pages.user.create');
        }

        // Save user and berkas to database
        $user->save();
        $berkas->save();

        // Clear session data
        $request->session()->forget('user');
        $request->session()->forget('berkas');

        return redirect()->route('pages.halaman-utama')
            ->with('success','Data Pendaftaran Berhasil Disimpan, Mohon Tunggu Konfirmasi Selanjutnya');
    }
}
