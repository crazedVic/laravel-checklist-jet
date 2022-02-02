<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FirmChecklistItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function checklist(): BelongsTo
    {
        return $this->belongsTo(FirmChecklist::class,'firm_checklist_id');
    }
//
//    public function notes()
//    {
//        return $this->morphMany(Note::class, 'noteof');
//    }

//    public function documents()
//    {
//        return $this->morphMany(Document::class, 'documentof');
//    }

    public function checklistItem()
    {
        return $this->belongsTo(ChecklistItem::class);
    }

    public function enable() :bool
    {
        // try to enable this item
        // will need to check if any dependent items are not completed
        foreach($this->checklistItem->parents as $parent){
            //returns a list of checklist item templates id
            // query current checklist i'm part of for item that belongs to each id
            //this gives you list of id's that other firm checklistitems belong to
            $firm_item = $this->checklist->items->where('checklist_item_id', $parent->id)->first();
            if ($parent->pivot->required && $firm_item->status != "Completed"){
                return false;
            }
        }
        $this->status = "Active";
        $this->save();
        return true;
    }
}

