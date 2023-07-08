<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Workshop extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'description',
        'date',
        'time',
        'location',
        'organizer',
        'contact',
        'status',
        'school_manager_id'
    ];


    public function workshopMedia(): HasMany
    {
        return $this -> hasMany(WorkshopMedia::class);
    }
    public function favoriteWorkshop(): HasMany
    {
        return $this -> hasMany(FavoriteWorkshop::class);
    }
    public function schoolManager():BelongsTo
    {
        return $this -> belongsTo(SchoolManager::class);
    }
}
