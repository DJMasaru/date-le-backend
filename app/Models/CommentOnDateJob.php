<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentOnDateJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'user_id',
        'girl_id',
        'friend_id',
    ];
}
