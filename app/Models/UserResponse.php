<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserResponse extends Model
{
    protected $table = 'user_responses';

    protected $fillable = [
        'balasan',
        'voice_url',
        'user_info',
    ];

    // public function getUserInfoAttribute($value)
    // {
    //     return json_decode($value, true);
    // }

    // public function setUserInfoAttribute($value)
    // {
    //     $this->attributes['user_info'] = json_encode($value);
    // }
}
