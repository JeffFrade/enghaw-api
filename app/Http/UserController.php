<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Core\Support\Error;
use App\Services\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    use Error;

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function store(Request $request)
    {
        try {
            $params = $this->validate($request, [
                'name' => 'required|max:191',
                'email' => 'required|max:191|unique:users,email',
                'password' => 'required|min:6|max:191',
            ]);

            $data = $this->user->store($params);

            return \response()->json($data, $data['code']);
        } catch (\Exception $e) {
            return response()->json($this->formatError($e), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
