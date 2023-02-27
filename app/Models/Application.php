<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    use HasFactory;

    public function seekerProfile():BelongsTo
    {
        return $this->belongsTo(SeekerProfile::class);
    }

    public function jobPost():BelongsTo
    {
        return $this->belongsTo(JobPosts::class);
    }
}
