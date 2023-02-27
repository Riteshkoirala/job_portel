<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;

    public function seekers():BelongsToMany
    {
        return $this->belongsToMany(SeekerProfile::class);
    }

    public function jobPosts():BelongsToMany
    {
        return $this->belongsToMany(JobPosts::class);
    }
}
