<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class SchoolManager extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'email',
        'password',
        'profile_id',
    ];

    public function workshop():HasMany{
        return $this->hasMany(Workshop::class);
    }
    public function university():HasMany{
        return $this->hasMany(University::class);
    }
    public function media() : BelongsTo {
        return $this -> belongsTo(Media::class);
    }
}

