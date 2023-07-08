<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UniversityMedia extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'university_id',
        'media_id',
    ];

    public function university() : BelongsTo
    {
        return $this-> belongsTo(University::class);
    }
    public function media() : BelongsTo
    {
        return $this-> belongsTo(Media::class);
    }
}
