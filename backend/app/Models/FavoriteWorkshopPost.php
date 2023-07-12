<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FavoriteWorkshopPost extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'user_id',
        'workshop_post_id',
    ];

    public function workshopPost() : BelongsTo 
    {
        return $this-> belongsTo(WorkshopPost::class);    
    }
    public function user() : BelongsTo 
    {
        return $this-> belongsTo(User::class);    
    }
}
