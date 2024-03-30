<?php

namespace App\Livewire\Home;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{

    public $projects;

    public function mount($number_of_projects)
    {
        $projects = Project::all()->take($number_of_projects);
        $this->projects = $projects;
    }
    public function render()
    {
        return view('livewire.home.projects');
    }
}
