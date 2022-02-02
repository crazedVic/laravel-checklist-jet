<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class FirmChecklist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function items(): HasMany
    {
        return $this->hasMany(FirmChecklistItem::class);
    }

    public function checklist(): BelongsTo
    {
        return $this->belongsTo(Checklist::class);
    }

    public function checklistof(): MorphTo
    {
        return $this->morphTo();
    }

//    public function notes(): MorphMany
//    {
//        return $this->morphMany(Note::class, 'noteof');
//    }

//    public function documents(): MorphMany
//    {
//        return $this->morphMany(Document::class, 'documentof');
//    }
}
