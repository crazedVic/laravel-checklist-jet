<?php

namespace App\Http\Livewire\Task;

use App\Http\Livewire\Shared\BaseModal;

class Modal extends BaseModal
{

    public $name;

    public $rules=[
        'name' => 'required|string|max:12'
    ];

    public function render()
    {
        return view('livewire.task.modal')->layout('livewire.shared.base-modal');
    }

    public function save(){
      //  $this->validate();
        $this->dispatchBrowserEvent('closemodal', ['modal' => 'showTaskModal']);

    }
}
