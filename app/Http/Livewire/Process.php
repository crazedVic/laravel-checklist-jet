<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Process extends Component
{

    public function render()
    {
        $processes = \App\Models\Process::all();
        return view('livewire.process',
        ["processes"=> $processes]);
    }
}
