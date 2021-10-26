<?php

namespace App\Http\Livewire;
use App\Models\{
    bio,
    socialDetails
};
use Livewire\Component;
class ViewCv extends Component
{

    public $photo;
    public function render()
    {
        return view('livewire.view-cv',[
            'bio' =>  bio::where("user_id",auth()->id())->first(),
            'profiles' =>  socialDetails::where("user_id",auth()->id())->get(),
        ])->layout("layouts.master");
    }
}
