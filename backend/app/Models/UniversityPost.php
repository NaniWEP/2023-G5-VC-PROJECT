<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UniversityPost extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'title',
        'description',
        'date',
        'variable_student',
        'status',
        'major_id',
        'user_id',
    ];

    public function application() : HasMany
    {
        return $this-> hasMany(UniversityApplication::class);
    }
    public function major() : BelongsTo
    {
        return $this-> belongsTo(Major::class);
    }

    public function user():BelongsTo
    {
        return $this -> belongsTo(User::class);
    }
}
