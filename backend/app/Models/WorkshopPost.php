<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkshopPost extends Model
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
        'user_id'
    ];


    public function workshopPostMedia(): HasMany
    {
        return $this -> hasMany(WorkshopPostMedia::class);
    }
    public function favoriteWorkshopPost(): HasMany
    {
        return $this -> hasMany(favoriteWorkshopPost::class);
    }
    public function user():BelongsTo
    {
        return $this -> belongsTo(User::class);
    }
    public function favorite(){
        $cid = auth()->guard('user')->user()!=null ? auth()->guard('user')->user()->id : null;
        return $this->belongsTo(FavoriteUniversityPost::class,'id','workshop_post_id')->where('user_id',$cid);
    }
}
