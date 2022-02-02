<?php

namespace App\Http\Livewire\Workflow;

use App\Models\FirmChecklist;
use App\Models\FirmChecklistItem;
use App\Models\Workflow;
use Livewire\Component;

use App\Models\Checklist;

class Index extends Component
{

    public function render()
    {
        $workflows = Workflow::all();
        $firmChecklists = []; //FirmChecklist::doesntHave("workflow")->get();
        return view('livewire.workflow.index',
        ["workflows"=> $workflows, "firmChecklists" => $firmChecklists]);
    }

    public function generateWorfklow(Workflow $workflow){
        error_log($workflow->name . ' to be processed');
        foreach($workflow->checklists as $checklist){
            // generate for each checklist and then for each item in each checklist
            $this->generateChecklist($checklist, $workflow);
        }
    }

    public function generateChecklist(Checklist $checklist, Workflow $workflow = null){
        error_log($checklist->name . ' to be processed');

        $firmChecklist = FirmChecklist::create([
            'process_id' => $workflow ? $workflow->id : null,
            'process_order' => $workflow ? $checklist->process_order : 0,
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
