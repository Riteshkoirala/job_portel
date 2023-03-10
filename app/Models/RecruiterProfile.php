<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RecruiterProfile extends Model
{
    use HasFactory;

    protected $fillable = [
      'company_name',
      'user_id',
      'location',
      'image',
      'detail',
      'contact_number',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jobPost(): HasMany
    {
        return $this->hasMany(JobPosts::class);
    }


}
