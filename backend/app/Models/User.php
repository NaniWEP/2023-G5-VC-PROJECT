<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'gender',
        'date_of_birth',
        'province',
        'role_id',
        'profile_image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function university(): HasOne
    {
        return $this->hasOne(University::class);
    }
    public function favoriteUniversityPost() : HasMany
    {
        return $this-> hasMany(FavoriteUniversityPost::class);
    }
    public function favoriteWorkshopPost() : HasMany
    {
        return $this-> hasMany(FavoriteWorkshopPost::class);
    }
    public function role() : BelongsTo
    {
        return $this-> belongsTo(Role::class);
    }
    public function workshopRegister() : HasMany
    {
        return $this-> hasMany(WorshopRegistration::class);
    }

    public function universityApplication() : HasMany
    {
        return $this-> hasMany(UniversityApplication::class);
    }
}
