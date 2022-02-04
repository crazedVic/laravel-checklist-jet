<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class ChecklistItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function itemof(): MorphToMany
    {
        //return $this->belongsTo(Checklist::class);
        return $this->morphtTo();
    }

    public function checklistDependencies(): MorphToMany
    {
        return $this->morphedByMany(Checklist::class, 'dependencyof', 'item_dependencies', 'item_id')->withPivot('required');
    }

    public function taskDependencies(): MorphToMany
    {
        return $this->morphedByMany(ChecklistItem::class, 'dependencyof', 'item_dependencies', 'item_id')->withPivot('required');
    }

//    public function documents() : MorphMany
//    {
//        return $this->morphMany(Document::class, 'documentof');
//    }

    public function old_children(): BelongsToMany
    {
        return $this->belongsToMany(
            ChecklistItem::class,
            'checklist_items_link',
            'parent_id',
            'child_id')->withPivot('required');
    }

    public function old_parents(): BelongsToMany
    {
        return $this->belongsToMany(
            ChecklistItem::class,
            'checklist_items_link',
            'child_id',
            'parent_id')->withPivot('required');
    }

}
