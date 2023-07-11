<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Media extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
    ];

    public function schoolManager() : HasMany {
        return $this-> hasMany(SchoolManager::class);
    }
    public function user() : HasMany {
        return $this-> hasMany(User::class);
    }
    public function universityMedia() : HasMany {
        return $this-> hasMany(UniversityMedia::class);
    }
    public function workshopMedia() : HasMany {
        return $this-> hasMany(WorkshopMedia::class);
    }
}
