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
        'job_id',
    ];

    public function commentByUser()
    {
        return $this->hasMany(User::class,'id','user_id');
    }
}
