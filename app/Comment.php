<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'gallery_id',
        'user_id'
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
