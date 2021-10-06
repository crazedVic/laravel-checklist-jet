<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Checklist;

class Process extends Component
{

    public function render()
    {
        $processes = \App\Models\Process::all();
        return view('livewire.process',
        ["processes"=> $processes]);
    }

    public function generateProcess(\App\Models\Process $process){
        error_log($process->name . ' to be processed');
    }

    public function generateChecklist(Checklist $checklist){
        error_log($checklist->name . ' to be processed');
    }
}
