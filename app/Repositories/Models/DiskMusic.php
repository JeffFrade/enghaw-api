<?php

namespace App\Repositories\Models;

use App\Repositories\Collections\Music;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

class DiskMusic extends Model
{
    use SoftDeletes, HybridRelations;

    protected $connection = 'mysql';
    protected $table = 'disk_music';
    protected $fillable = [
        'id_disk',
        'id_music'
    ];

    public function disk()
    {
        return $this->hasOne(Disk::class, 'id_disk', 'id');
    }

    public function musics()
    {
        return $this->hasMany(Music::class, 'id_music', '_id');
    }
}
