<?php

namespace App\Http\Livewire\LeftSideBar;

use Livewire\Component;

class Bio extends Component
{
    public $name;
    public $age;
    public $email;
    public $address;
    public $gender;
    public $dob;

    public function save_bio()
    {
        dd($this->name." - ".$this->email." - ".$this->age);
    }


    public function render()
    {
        return view('livewire.left-side-bar.bio');
    }
}
