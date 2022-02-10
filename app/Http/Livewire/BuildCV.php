<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithFileUploads;
use Barryvdh\DomPDF\Facade\Pdf;

class BuildCV extends Component
{
    use WithFileUploads;

    public $photo;
    public $bio;
    public $profiles = [];
    public $name;
    public $phone;
    public $address;
    public $email;
    public $age;
    public $socialLinks = [];
    public $projects=[];
    public $project;
    public $OtherSkills;


    public $Education=[];
    public $Education_title;
    public $Education_head;
    public $Education_content;

    public $socialLinks_profile_name = "";
    public $socialLinks_profile_link = "";
    public $codingLanguages;
    public $frameWorkSystems;
    public $MarkupLanguages;

    public $technical_supports=[];
    public $technical_support;
    public $webDevTime;

    public $software_engineering=[];
    public $software_engineer;

    public function add_software_engineer()
    {
        $this->validate([
            'software_engineer' => "required",
        ]);
        $this->software_engineering[] = $this->software_engineer;
        unset($this->software_engineer);

    }

    public function add_technical_support()
    {
        $this->validate([
            'technical_support' => "required",
        ]);
        $this->technical_supports[] = $this->technical_support;
        unset($this->technical_support);

    }

    public function save_education()
    {
        $this->validate([
            'Education_title' => "required",
            'Education_head' => "required",
            'Education_content' => "required",
        ]);
        $this->Education[] = [
            'title' =>$this->Education_title,
            'head' =>$this->Education_head,
            'content' =>$this->Education_content
        ];
        unset($this->Education_title);
        unset($this->Education_head);
        unset($this->Education_content);
    }
    public function save_social_links()
    {
        $this->validate([
            "socialLinks_profile_name" => "required|string",
            "socialLinks_profile_link" => "required|url",
        ]);

        $this->socialLinks[] = ['name' => $this->socialLinks_profile_name, "link" => $this->socialLinks_profile_link];

        unset($this->socialLinks_profile_name);
        unset($this->socialLinks_profile_link);
    }

    public function save_pdf()
    {
        dd('s');
    }

    public function save_project()
    {
        $this->validate([
            "project" => "required",
        ]);
        $this->projects[]=$this->project;
        unset($this->project);
    }

    public function render()
    {
        return view('livewire.build-c-v')->layout("layouts.main");
    }
}
