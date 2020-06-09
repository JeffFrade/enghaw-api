<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disk extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'disks';

    protected $fillable = [
        'name',
        'year',
        'record_company',
        'cover'
    ];
}
