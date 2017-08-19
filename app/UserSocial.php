<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid',
        'instagram',
        'facebook',
        'twitter'
    ];

    public function user(){
       return $this->belongsTo(user::class);
    }
}
