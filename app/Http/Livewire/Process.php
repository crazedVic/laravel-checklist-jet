<?php

namespace App\Http\Livewire;

use App\Models\FirmChecklist;
use App\Models\FirmChecklistItem;
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
        foreach($process->checklists as $checklist){
            // generate for each checklist and then for each item in each checklist
            $this->generateChecklist($checklist, $process);
        }
    }

    public function generateChecklist(Checklist $checklist, \App\Models\Process $process = null){
        error_log($checklist->name . ' to be processed');

        $firmChecklist = FirmChecklist::create([
            'process_id' => $process ? $process->id : null,
            'process_order' => $process ? $checklist->process_order : 0,
            'checklist_id' => $checklist->id,
            'checklistof_id' => 1, //firm
            'checklistof_type' => "App//Models//Firm",
            'name' => $checklist->name,
            'description' => $checklist->description
        ]);

        foreach($checklist->items as $item){
            $firmCheckListItem = FirmChecklistItem::create([
                'firm_checklist_id' => $firmChecklist->id,
                'firm_parent_item_id' => $item->parent_item_id,
                'activated_parent_status' => $item->activated_parent_status,
                'required' => $item->required,
                'description' => $item->description,
                'status' => "Pending",
                'sort_order' => $item->sort_order,
                'category' => $item->category
            ]);
            ;
        }
    }
}
