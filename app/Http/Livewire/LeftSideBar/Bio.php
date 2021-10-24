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
    public $phone;

    public function save_bio()
    {
        $this->validate(array(
            'name' => 'required|min:4',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'address' => 'required',
            'phone' => 'required',
        ));

        bioModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'age' => $this->age,
            'address' => $this->address,
            'phone' => $this->phone,
            'user_id' => auth()->id()
        ]);
    }


    public function render()
    {
        return view('livewire.left-side-bar.bio');
    }
}
