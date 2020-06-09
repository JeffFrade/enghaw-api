<?php

namespace App\Core\Support;

use Illuminate\Http\Response;

trait Error
{
    private function formatError(\Exception $e, int $code = 500, string $message = '')
    {
        return [
            'data' => [
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ],

            'message' => $message,
            'code' => $code
        ];
    }

    private function renderError(array $error)
    {
        return response()->json([
            'success' => 0,
            'error' => $error['data'],
            'message' => $error['message']
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
