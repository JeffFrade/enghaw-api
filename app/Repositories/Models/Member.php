<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'members';
    protected $fillable = [
        'name',
        'birth',
        'description',
        'photo'
    ];
}
