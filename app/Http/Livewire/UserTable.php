<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
class UserTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nama_lengkap, $no_telp, $jabatan, $alamat, $jenis_kelamin, $tanggal_lahir, $email, $password;
    public $isModal = 0;

    public $search = '';

    protected function rules()
    {
        return [
            'nama_lengkap' => 'required|string',
            'no_telp' => 'required|numeric',
            'jabatan' => 'required|string',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|string',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveUser()
    {
        $validatedData = $this->validate();

        User::create($validatedData);
        session()->flash('message','User Berhasil Ditambahkan');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editUser(int $id)
    {
        $user = User::find($id);
        if($user){
            $this->id = $user->id;
            $this->nama_lengkap = $user->nama_lengkap;
            $this->no_telp = $user->no_telp;
            $this->jabatan = $user->jabatan;
            $this->alamat = $user->alamat;
            $this->jenis_kelamin = $user->jenis_kelamin;
            $this->tanggal_lahir = $user->tanggal_lahir;
            $this->email = $user->email;
            $this->password = $user->password;
        }else{
            return redirect()->to('/pendaftar');
        }
    }

    public function updateUser()
    {
        $validatedData = $this->validate();

        User::where('id',$this->id)->update([
            'nama_lengkap' => $this->nama_lengkap,
            'no_telp' => $this->no_telp,
            'jabatan' => $this->jabatan,
            'alamat' => $this->alamat,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tanggal_lahir' => $this->tanggal_lahir,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        session()->flash('message','User Berhasil Diupdate');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteUser(int $id)
    {
        $this->id = $id;
    }

    public function destroyUser()
    {
        User::find($this->id)->delete();
        session()->flash('message','User Berhasil Dihapus');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nama_lengkap = '';
        $this->no_telp = '';
        $this->jabatan = '';
        $this->alamat = '';
        $this->jenis_kelamin = '';
        $this->tanggal_lahir = '';
        $this->email = '';
        $this->password = '';
    }

    public function render()
    {
        $users = User::where('nama_lengkap', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(3);
        return view('livewire.user-table', ['users' => $users]);
    }
}
