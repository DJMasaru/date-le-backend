<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogDateJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'girl_id',
        'date_of_date',
        'time_of_date',
        'place_of_date',
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
