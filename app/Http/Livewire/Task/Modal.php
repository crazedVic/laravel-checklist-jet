<?php

namespace App\Http\Livewire\Task;

use App\Http\Livewire\Shared\BaseModal;

class Modal extends BaseModal
{

    public $name;
    public $checklist_id;

    public $rules=[
        'name' => 'required|string|max:12',
        'checklist_id'=>'numeric|required'
    ];

    public function render()
    {
        return view('livewire.task.modal')->layout('livewire.shared.base-modal');
    }

    public function save(){
        //$this->validate();
        dd([$this->name, $this->checklist_id]);
        $this->dispatchBrowserEvent('closemodal', ['modal' => 'showTaskModal']);

    }
}
