<?php

namespace App\Repositories;

use App\Core\Support\AbstractRepository;
use App\Repositories\Models\Member;

class MemberRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Member();
    }
}
