<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gallery;
class Picture extends Model
{
    protected $fillable = [
        'imageUrl',
        'gallery_id',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
