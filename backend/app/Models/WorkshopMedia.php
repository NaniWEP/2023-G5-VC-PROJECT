<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkshopMedia extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'workshop_id',
        'media_id',
    ];

    public function workshop() : BelongsTo
    {
        return $this-> belongsTo(Workshop::class);
    }
    public function media() : BelongsTo
    {
        return $this-> belongsTo(Media::class);
    }
}
