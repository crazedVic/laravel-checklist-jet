<?php

namespace App\Http\Livewire;

use App\Models\Checklist;
use Livewire\Component;

class Items extends Component
{
    protected $listeners = ["poop"];

    public Checklist $checklist;

    public function render()
    {
        return view('livewire.items');
    }

    public function poop(Checklist $checklist){
        $this->checklist = $checklist;
    }

}
