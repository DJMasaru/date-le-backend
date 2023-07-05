<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'girl_id',
        'date_of_date',
        'date_of_time',
        'date_of_place',
        'comment_count',
        'favorite_count',
    ];

    public function girlsProfile()
    {
        return $this->hasOne(GirlsProfile::class, 'id', 'girl_id');
    }
    public function user()
    {
        return $this->hasMany(User::class,'id','user_id');
    }
}
