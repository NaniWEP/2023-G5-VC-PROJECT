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

    public function user() : HasMany 
    {
        return $this-> hasMany(User::class);
    }
    public function universityPostMedia() : HasMany 
    {
        return $this-> hasMany(UniversityPostMedia::class);
    }
    public function workshopPostMedia() : HasMany 
    {
        return $this-> hasMany(WorkshopPostMedia::class);
    }
}
