<?php

namespace App\Http\Livewire;

use App\Models\FirmChecklist;
use Livewire\Component;

class FirmItems extends Component
{
    protected $listeners = ["poopFirm","item_completed"];

    public FirmChecklist $checklist;

    public function poopFirm(FirmChecklist $checklist){
        $this->checklist = $checklist;
    }

    public function item_completed(int $id , bool $value){
        error_log($id . ': ' . $value ?: 0);
    }

    public function render()
    {
        return view('livewire.firm-items');
    }
}
