<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Checklist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function items(): HasMany
    {
        return $this->hasMany(ChecklistItem::class);
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
