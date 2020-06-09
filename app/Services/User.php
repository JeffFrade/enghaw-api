<?php

namespace App\Services;

use App\Core\Support\Error;
use App\Repositories\UserRepository;

class User
{
    use Error;

    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function store(array $params)
    {
        try {
            $params['password'] = bcrypt($params['password']);

            $user = $this->userRepository->create($params);

            return [
                'status' => true,
                'data' => $user,
                'code' => 200
            ];
        } catch (\Exception $e) {
            return $this->formatError($e);
        }
    }
}
