<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
class University extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'description',
        'website',
        'email',
        'phone',
        'location',
        'province',
        'user_id',
    ];

    public function major() : HasMany
    {
        return $this-> hasMany(Major::class);
    }

    public function user():BelongsTo
    {
        return $this -> belongsTo(User::class);
    }
}
