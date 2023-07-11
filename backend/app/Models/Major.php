<?php

namespace App\Models;

use App\Http\Controllers\UniversityPostController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'description',
        'year_duration',
        'month_duration',
        'apply_date',
        'start_date',
        'price',
        'university_id',
    ];

    public function universityPost() : HasMany
    {
        return $this-> hasMany(UniversityPost::class);
    }
    public function university() : BelongsTo
    {
        return $this-> belongsTo(University::class);
    }


}
