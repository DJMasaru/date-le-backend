<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'name','age', 'email', 'password', 'occupation', 'notice', 'image_url','birthday',
        'hobby', 'girl_experiences', 'favorite_feature', 'favorite_date_time',
        'favorite_date_place', 'favorite_clothes', 'favorite_character', 'favorite_age_range',
        'address',
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

    public function comments()
    {
        return $this->belongsTo(CommentOnDateJob::class,'user_id','id');
    }

    public function dateJobs()
    {
        return $this->hasMany(DateJob::class,'user_id','id');
    }

    public function logDateJobs()
    {
        return $this->hasMany(LogDateJob::class,'user_id','id');
    }

    public function girlsProfile()
    {
        return $this->hasOne(GirlsProfile::class, 'id', 'girl_id');
    }

    public function friendships()
    {
        return $this->hasMany(Friendship::class, 'user_id');
    }

    public function followedUsers()
    {
        return $this->hasMany(Friendship::class, 'followed_user_id');
    }
}
