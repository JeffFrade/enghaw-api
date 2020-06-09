<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

class DiskMember extends Model
{
    protected $connection = 'mysql';
    protected $table = 'disk_member';
    protected $fillable = [
        'id_disk',
        'id_member'
    ];

    public function disks()
    {
        return $this->hasMany(Disk::class, 'id', 'id_disk');
    }

    public function members()
    {
        return $this->hasOne(Member::class, 'id', 'id_member');
    }
}
