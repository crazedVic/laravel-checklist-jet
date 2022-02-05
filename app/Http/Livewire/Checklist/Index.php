<?php

namespace App\Http\Livewire\Checklist;

use Livewire\Component;

class Index extends Component
{

    public $checklist;
    public $listeners = [];

    public function mount ($checklist){
        $this->listeners = [$checklist->id .'_refresh' => 'refreshTasks'];
    }

    public function render()
    {

        return view('livewire.checklist.index');
    }

    public function refreshTasks(){
        dd('refreshing ' . $this->checklist->name);
    }
}
