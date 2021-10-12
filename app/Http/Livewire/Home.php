<?php

namespace App\Http\Livewire;

use App\Models\Checklist;
use Livewire\Component;

class Home extends Component
{
    public $firm = false;
    protected $listeners = ["poopFirm","poop"];

    public function poopFirm(Checklist $checklist){
        $this->firm = true;
    }

    public function poop(Checklist $checklist){
        $this->firm= false;
    }

    public function render()
    {
        return view('livewire.home');
    }


}
