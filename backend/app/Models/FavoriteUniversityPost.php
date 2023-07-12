<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FavoriteUniversityPost extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'user_id',
        'university_post_id',
    ];

    public function universityPost() : BelongsTo
    {
        return $this-> belongsTo(UniversityPost::class);
    }
    public function user() : BelongsTo
    {
        return $this-> belongsTo(User::class);
    }
}
