<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FavoriteUniversity extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'university_id',
        'user_id',
    ];

    public function university() : BelongsTo
    {
        return $this-> belongsTo(University::class);
    }
    public function user() : BelongsTo
    {
        return $this-> belongsTo(User::class);
    }
}
