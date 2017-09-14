<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'gallery_id'
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
