<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Firm extends Model
{
    protected $table = 'firms';

    use HasFactory;

    use SoftDeletes;

    protected $guarded = [];
    protected $hidden = []; //fields that don't get publicly displayed

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function checklists(): MorphMany
    {
        return $this->morphMany(FirmChecklist::class, 'checklistof');
    }

    //sanitize when saving
    protected static function booted()
    {
        static::saving(function($firm)
        {
            $firm->year_founded = str_replace("y", "", $firm->year_founded);
            $firm->primary_sic = str_replace("_", "", $firm->primary_sic);
        });
    }
}
