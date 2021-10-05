<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class ChecklistItem extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['children'];

    /**
     * @return BelongsTo
     */
    public function checklist(): BelongsTo
    {
        return $this->belongsTo(Checklist::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(ChecklistItem::class, 'parent_item_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(ChecklistItem::class, 'parent_item_id');
    }


}
