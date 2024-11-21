<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait Response
{


    private function responseSuccess($status = 200, $message = 'Success', $data = []): JsonResponse
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $status);
    }

    private function responseFail($status = 404, $message = 'Error', $data = []): JsonResponse
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $status);
    }


}
