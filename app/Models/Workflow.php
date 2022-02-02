<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workflow extends Model
{
    use HasFactory;

    protected $guarded = [];

    // eager loading
    protected $with = ["checklists"];

    public function checklists(): HasMany
    {
        return $this->hasMany(Checklist::class);
    }

}
