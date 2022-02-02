<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class ChecklistItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function checklist(): BelongsTo
    {
        return $this->belongsTo(Checklist::class);
    }


//    public function documents() : MorphMany
//    {
//        return $this->morphMany(Document::class, 'documentof');
//    }

    public function children(): BelongsToMany
    {
        return $this->belongsToMany(
            ChecklistItem::class,
            'checklist_items_link',
            'parent_id',
            'child_id')->withPivot('required');
    }

    public function parents(): BelongsToMany
    {
        return $this->belongsToMany(
            ChecklistItem::class,
            'checklist_items_link',
            'child_id',
            'parent_id')->withPivot('required');
    }

}
