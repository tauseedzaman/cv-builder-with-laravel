<?php

namespace App\Http\Livewire;
use App\Models\{
    bio,
    socialDetails,
    project
};
use Livewire\Component;
class ViewCv extends Component
{

    public $photo;
    public function render()
    {
        // $projects = explode(",",project::where("user_id",auth()->id())->orderBy("id","DESC")->first()->projects);

        return view('livewire.view-cv',[
            'bio' =>  bio::where("user_id",auth()->id())->orderBy("id","DESC")->first(),
            'profiles' =>  socialDetails::where("user_id",auth()->id())->get(),
            // 'projects' => $projects ,
        ])->layout("layouts.master");
    }
}
