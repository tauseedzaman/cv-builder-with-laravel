<?php

namespace App\Http\Livewire\LeftSideBar;

use Livewire\Component;
use App\Models\project as projectsModel;
class Projects extends Component
{
    public $projects;

    public function save_projects()
    {
        $this->validate([
            "projects" => "required"
        ]);

        projectsModel::create([
            "projects" => $this->projects,
            "user_id" => auth()->id()
        ]);
        unset($this->projects);
    }

    public function render()
    {
        return view('livewire.left-side-bar.projects');
    }
}
