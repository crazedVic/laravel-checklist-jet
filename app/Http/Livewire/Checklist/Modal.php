<?php

namespace App\Http\Livewire\Checklist;

use App\Http\Livewire\Shared\BaseModal;

class Modal extends BaseModal
{
    public function render()
    {
        return view('livewire.checklist.modal')->layout('livewire.shared.base-modal');
    }

    public function save(){
        //  $this->validate();
        $this->dispatchBrowserEvent('closemodal', ['modal' => 'showChecklistModal']);

    }
}
