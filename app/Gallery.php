<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Gallery extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];


    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
