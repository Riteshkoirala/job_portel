<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JobPosts extends Model
{
    use HasFactory;

    protected $fillable = [
        'recruiter_id',
        'title',
        'location',
        'deadline',
        'type_id',
        'qualification',
        'experience',
        'vacancy',
        'description',
        'responsibility',
        'benefit',
    ];

    public function recruiterProfile():HasOne
    {
        return $this->hasOne(RecruiterProfile::class,'id','recruiter_id');
    }

    public function application(): HasMany
    {
        return $this->hasMany(Application::class);
    }

    public function jobType():HasOne
    {
        return $this->hasOne(JobType::class,'id','type_id');
    }

    public function postSkill():BelongsToMany
    {
        return $this->belongsToMany(Skill::class,'post_skills','post_id','skill_id');
    }


}
