<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LeftSideBar extends Component
{
    public function render()
    {
        return view('livewire.left-side-bar')->layout("layouts.master");
    }
}
