<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UniversityPost extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'title',
        'description',
        'date',
        'status',
        'major_id',
        'user_id',
    ];

    public function major() : BelongsTo
    {
        return $this-> belongsTo(Major::class);
    }

    public function user():BelongsTo
    {
        return $this -> belongsTo(User::class);
    }
}
