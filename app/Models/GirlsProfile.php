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
        'feature_first',
        'feature_second',
        'feature_third',
        'birthday',
        'address',
        'hobby',
        'character',
        'favorite_type_of_man',
        'favorite_foods',
        'dislike_foods',
        'opportunity_to_meet',
        'notice',
        'has_boyfriend',
        'count_of_dates',
    ];

    public function dateJob()
    {
        return $this->belongsTo(DateJob::class, 'girl_id', 'id');
    }

    public function logDateJob()
    {
        return $this->belongsTo(LogDateJob::class, 'girl_id', 'id');
    }

}
