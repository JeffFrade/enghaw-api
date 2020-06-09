<?php

namespace App\Repositories\Collections;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Music extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';
    protected $collection = 'musics';
    protected $fillable = [
        'title',
        'lyrics',
        'composers',
        'videos'
    ];
}
