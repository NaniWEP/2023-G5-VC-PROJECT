<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UniversityPostMedia extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'university_post_id',
        'media_id',
    ];

    public function universityPost() : BelongsTo
    {
        return $this-> belongsTo(UniversityPost::class);
    }
    public function media() : BelongsTo
    {
        return $this-> belongsTo(Media::class);
    }
}
