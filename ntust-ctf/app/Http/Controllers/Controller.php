<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * return success response
     * @param array $data
     * @param int $status_code
     * @return JsonResponse
     */
    public function success(array $data = [], int $status_code = 200): JsonResponse
    {
        return response()->json([
            "success" => true,
            "data" => $data
        ], $status_code);
    }

    /**
     * return fail response
     * @param array $data
     * @param string $message
     * @param int $status_code
     * @return JsonResponse
     */
    public function fail(array $data = [], string $message = "", int $status_code = 400): JsonResponse
    {
        return response()->json([
            "success" => false,
            "message" => $message,
            "data" => $data
        ], $status_code);
    }
}
