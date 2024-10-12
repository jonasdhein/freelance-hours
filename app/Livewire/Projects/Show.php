<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Show extends Component
{
    public Project $project; //é do mesmo tipo para que ele já entenda o tipo de variável que é

    public function render()
    {
        return view('livewire.projects.show');
    }
}
