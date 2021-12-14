<?php

namespace App\Http\Livewire\LeftSideBar;

use Livewire\Component;
use App\Models\socialDetails;

class SocialLinks extends Component
{


    public $profile_name="";
    public $profile_link="";

        public function save_social_links()
        {
        $this->validate([
            "profile_name" => "required|string",
            "profile_link" => "required|string",
            ]);
            socialDetails::create([
                "profile_name" => $this->profile_name,
                "profile_link" => $this->profile_link,
                "user_id" => auth()->id()
            ]);

            unset($this->profile_name);
            unset($this->profile_link);

    }
    public function render()
    {
        return view('livewire.left-side-bar.social-links');
    }
}
