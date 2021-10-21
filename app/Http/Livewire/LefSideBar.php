<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LefSideBar extends Component
{
    public function render()
    {
        return view('livewire.lef-side-bar')->layout('layouts.master');
    }
}
