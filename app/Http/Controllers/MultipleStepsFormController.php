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
    protected $request;
    public function __construct(Request $request){
        $this->request = $request;
    }
    public function lowongan(): View
    {
        $datalowongan = Lowongan::latest()->paginate(5);

        return view('pages.pendaftaran.lowongan',compact('datalowongan'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function createStepOne(string $id): View
    {
        // $user = $this->request->session()->get('user');
        // $jabatann = Lowongan::findOrFail($id);
        $data = array('id');
        if($this->request->session()->has('user')){
            $user = $this->request->session()->get('user');
            $data[] = 'user';
        }
        if($this->request->session()->has('berkas')){
            $berkas = $this->request->session()->get('berkas');
            $data[] = 'berkas';
        }
        return view('pages.pendaftaran.biodata', compact($data));
    }
    public function postCreateStepOne()
    {
        $validatedData = $this->request->validate([
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
        $this->request->session()->put('user', $user);
        $data = array('user');
        if($this->request->session()->has('berkas')){
            $berkas = $this->request->session()->get('berkas');
            $data[] = 'berkas';
        }
        return redirect()->route('pages.pendaftaran.berkas', compact($data));
    }

    public function createStepTwo()
    {
        $user = $this->request->session()->get('user');
        $data = array('user');
        if($this->request->session()->has('berkas')){
            $berkas = $this->request->session()->get('berkas');
            $data[] = 'berkas';
        }
        return view('pages.pendaftaran.berkas', compact($data));
    }

    public function postCreateStepTwo()
    {
        $validatedData = $this->request->validate([
            'ktp'           => 'image|mimes:jpeg,jpg,png,pdf|max:10000',
            'ktm'           => 'image|mimes:jpeg,jpg,png,pdf|max:10000',
            's_pernyataan'  => 'image|mimes:jpeg,jpg,png,pdf|max:10000'
        ]);

        $user = $this->request->session()->get('user');

        if (!$user) {
            return redirect()->route('pages.pendaftaran.biodata');
        }
        if($this->request->session()->has('berkas')){
            $berkas = $this->request->session()->get('berkas');
            // $data[] = 'berkas';
        }
        if(!empty($validatedData['ktp']) && !empty($validatedData['ktm']) && !empty($validatedData['s_pernyataan'])) $berkas = new Berkas();

        // Save the uploaded files to a file path
        if(!empty($validatedData['ktp']))            $berkas->ktp = $validatedData['ktp']->store('public/berkas');
        if(!empty($validatedData['ktm']))            $berkas->ktm = $validatedData['ktm']->store('public/berkas');
        if(!empty($validatedData['s_pernyataan']))   $berkas->s_pernyataan = $validatedData['s_pernyataan']->store('public/berkas');
        // $berkas->ktp = $validatedData['ktp']->store('public/berkas');
        // $berkas->ktm = $validatedData['ktm']->store('public/berkas');
        // $berkas->s_pernyataan = $validatedData['s_pernyataan']->store('public/berkas');

        if(!empty($validatedData['ktp']) && !empty($validatedData['ktm']) && !empty($validatedData['s_pernyataan'])) $berkas->id_user = $user->id;
        if(!empty($validatedData['ktp']) && !empty($validatedData['ktm']) && !empty($validatedData['s_pernyataan'])) $this->request->session()->put('berkas', $berkas);
        return redirect()->route('pages.review', compact(['user', 'berkas']));
    }

    public function createStepThree()
    {
        $user = $this->request->session()->get('user');
        $berkas = $this->request->session()->get('berkas');

        if (!$user || !$berkas) {
            return redirect()->route('pages.user.create');
        }

        return view('pages.pendaftaran.review', compact('user', 'berkas'));
    }

    public function postCreateStepThree()
    {
        $user = $this->request->session()->get('user');
        $berkas = $this->request->session()->get('berkas');

        if (!$user || !$berkas) {
            return redirect()->route('pages.pendaftaran.lowongan');
        }

        // Save user and berkas to database
        $user->save();
        $berkas->save();

        // Clear session data
        $this->request->session()->forget('user');
        $this->request->session()->forget('berkas');

        return redirect()->route('sukses');
    }

    public function sukses(): View
    {
        return view('pages.pendaftaran.sukses');
    }
}
