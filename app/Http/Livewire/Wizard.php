<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Pendaftar;
use Livewire\WithFileUploads;

class Wizard extends Component
{
    use WithFileUploads;

    public $nama_lengkap;
    public $no_telp;
    public $jabatan;
    public $alamat;
    public $jenis_kelamin;
    public $tanggal_lahir;
    public $email;
    public $password;
    public $ktp;
    public $ktm;
    public $s_pernyataan;

    public $totalSteps = 3;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }


    public function render()
    {
        return view('pages.pendaftaran.multiform');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'nama_lengkap'  => 'required',
                'no_telp'       => 'required',
                'jabatan'       => 'required',
                'email'         => 'required',
                'password'      => 'required',
                'alamat'        => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                'ktp' => 'required|image|mimes:jpeg,jpg,png,pdf|max:10000',
                'ktm' => 'required|image|mimes:jpeg,jpg,png,pdf|max:10000',
                's_pernyataan' => 'required|image|mimes:jpeg,jpg,png,pdf|max:10000'
              ]);
        }
        elseif($this->currentStep == 3){
            $this->validate([
                'nama_lengkap'  => 'required',
                'no_telp'       => 'required',
                'jabatan'       => 'required',
                'email'         => 'required',
                'password'      => 'required',
                'alamat'        => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'ktp' => 'required|image|mimes:jpeg,jpg,png,pdf|max:5000',
                'ktm' => 'required|image|mimes:jpeg,jpg,png,pdf|max:5000',
                's_pernyataan' => 'required|image|mimes:jpeg,jpg,png,pdf|max:5000'
            ]);
      }
    }

    public function register(){
          $this->resetErrorBag();
        //   if($this->currentStep == 3){
        //       $this->validate([
        //         //   'cv'=>'required|mimes:doc,docx,pdf|max:1024',
        //         //   'terms'=>'accepted'

        //       ]);
        //   }
            $ktp_name = 'KTP_'.time().$this->ktp->getClientOriginalName();
            $upload_ktp = $this->ktp->storeAs('mahasiswa_ktp', $ktp_name);

            $ktm_name = 'KTM_'.time().$this->ktm->getClientOriginalName();
            $upload_ktm = $this->ktm->storeAs('mahasiswa_ktm', $ktm_name);

            $s_pernyataan_name = 'S_Pernyataan_'.time().$this->s_pernyataan->getClientOriginalName();
            $upload_s_pernyataan = $this->s_pernyataan->storeAs('mahasiswa_s_pernyataan', $s_pernyataan_name);

          if($upload_ktp && $upload_ktm && $upload_s_pernyataan){
              $values = array(
                    "nama_lengkap"=>$this->nama_lengkap,
                    "no_telp"=>$this->no_telp,
                    "jabatan"=>$this->jabatan,
                    "email"=>$this->email,
                    "password"=>$this->password,
                    "alamat"=>$this->alamat,
                    "jenis_kelamin"=>$this->jenis_kelamin,
                    "tanggal_lahir"=>$this->tanggal_lahir,
                    "ktp"=>$ktp_name,
                    "ktm"=>$ktm_name,
                    "s_pernyataan"=>$s_pernyataan_name,
                    // "country"=>$this->country,
                    // "city"=>$this->city,
                    // "frameworks"=>json_encode($this->frameworks),
                    // "description"=>$this->description,
                    // "cv"=>$cv_name,
              );

            Pendaftar::insert($values);
            //   $this->reset();
            //   $this->currentStep = 1;
            $data = ['nama_lengkap'=>$this->nama_lengkap,'email'=>$this->email];
            return redirect()->route('registration.success', $data);
          }
    }
}
