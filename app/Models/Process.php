<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Process extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function checklists(): HasMany
    {
        return $this->hasMany(Checklist::class);
    }

    public function firmChecklists(): HasMany{
        return $this->hasMany(FirmChecklist::class);
    }
}
