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
    public function universityPostMedia() : HasMany 
    {
        return $this-> hasMany(UniversityPostMedia::class);
    }
    public function workshopPost()
    {
        return $this-> belongsToMany(WorkshopPost::class);
    }
}
