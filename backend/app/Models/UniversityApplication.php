<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UniversityApplication extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'gender',
        'degree',
        'origin_loaction',
        'residence_loaction',
        'user_id',
        'university_post_id',
    ];

    public function user() : BelongsTo
    {
        return $this-> belongsTo(User::class);
    }

    public function universityPost() : BelongsTo
    {
        return $this-> belongsTo(UniversityPost::class);
    }
}
