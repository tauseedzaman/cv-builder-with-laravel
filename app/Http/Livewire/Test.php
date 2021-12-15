<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.test')->layout("layouts.master");
    }
}
