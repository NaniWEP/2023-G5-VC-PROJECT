<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkshopPostMedia extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'workshop_post_id',
        'media_id',
    ];

    public function workshopPost() : BelongsTo
    {
        return $this-> belongsTo(WorkshopPost::class);
    }
    public function media() : BelongsTo
    {
        return $this-> belongsTo(Media::class);
    }
}
