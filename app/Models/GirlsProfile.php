<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GirlsProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'occupation',
        'image_url',
        'user_id',
    ];
}
