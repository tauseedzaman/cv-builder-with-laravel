<?php

namespace App\Http\Livewire;
use App\Models\bio;
use Livewire\Component;

class ViewCv extends Component
{
    public function render()
    {
        return view('livewire.view-cv',[
            'bio' =>  bio::where("user_id",auth()->id())->first(),
        ])->layout("layouts.master");
    }
}
