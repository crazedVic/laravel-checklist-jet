<?php

namespace App\Http\Livewire;

use App\Models\Checklist;
use Livewire\Component;

class Items extends Component
{
    protected $listeners = ["poop","item_completed"];

    public Checklist $checklist;

    public function render()
    {
        return view('livewire.items');
    }

    public function poop(Checklist $checklist){
        $this->checklist = $checklist;
    }

    public function item_completed(int $id , bool $value){
        error_log($id . ': ' . $value ?: 0);
    }

}
