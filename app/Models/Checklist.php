<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Checklist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function items(): morphToMany
    {
        return $this->morphToMany(ChecklistItem::class, 'item');
    }


    public function checklists(): HasMany
    {
        return $this->hasMany(FirmChecklist::class);
    }


//    public function documents(): MorphMany
//    {
//        return $this->morphMany(Document::class, 'documentof');
//    }
}
