<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class UserTable extends Component
{
   // protected $user;
    public function render()
    {
        $user = User::latest()->paginate(5);
        return view('livewire.user-table',compact('user'));
    }
}
