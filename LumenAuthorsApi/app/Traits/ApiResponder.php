<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponder {

    /**
     * @param array $data
     * @param int   $code
     *
     * @return JsonResponse
     */
    public function successResponse(array $data, int $code = Response::HTTP_OK) {
        return response()->json(['data' => $data], $code);
    }


    /**
     * @param array $data
     * @param int   $code
     *
     * @return JsonResponse
     */
    public function errorResponse(array $data, int $code) {
        return response()->json(['error' => $data, 'code' => $code], $code);
    }
}
