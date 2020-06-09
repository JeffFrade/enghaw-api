<?php

namespace App\Repositories;

use App\Core\Support\AbstractRepository;
use App\Repositories\Models\Disk;

class DiskRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Disk();
    }
}
