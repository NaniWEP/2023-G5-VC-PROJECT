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
        'status',
        'school_manager_id',
    ];

    public function major() : HasMany
    {
        return $this-> hasMany(Major::class);
    }

    public function universityMedia() : HasMany
    {
        return $this-> hasMany(UniversityMedia::class);
    }

    public function favoriteUniversity() : HasMany
    {
        return $this-> hasMany(FavoriteUniversity::class);
    }

    public function schoolManager():BelongsTo
    {
        return $this -> belongsTo(SchoolManager::class);
    }
}
