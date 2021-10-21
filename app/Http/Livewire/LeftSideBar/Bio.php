<?php

namespace App\Http\Livewire\LeftSideBar;

use Livewire\Component;
use App\Models\Bio as bioModel;
class Bio extends Component
{
    public $name;
    public $age;
    public $email;
    public $address;
    public $gender;

    public function save_bio()
    {
        $this->validate(array(
            'name' => 'required|min:4',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'address' => 'required',
            'gender' => 'required|bool', //if 1 then male other wise female ;)
        ));

        bioModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'age' => $this->age,
            'address' => $this->address,
            'gender' => $this->gender,
            'user_id' => auth()->id()
        ]);
        dd("its don bro");

    }


    public function render()
    {
        return view('livewire.left-side-bar.bio');
    }
}
