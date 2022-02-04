<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Checklist extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ["items"];

    public function items(): MorphMany
    {
        return $this->morphMany(ChecklistItem::class, 'itemof')->orderBy('sort_order');
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
