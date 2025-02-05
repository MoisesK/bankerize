<?php

namespace App\Shared\Infra\Traits;

use App\Shared\Infra\Exceptions\ValidationException;
use Illuminate\Http\JsonResponse;

trait JsonResponsable
{
    /**
     * @param $data
     * @param string $message
     * @return JsonResponse
     */
    public function created($data = null, $message = 'Criado com sucesso'): JsonResponse
    {
        return response()->json([
            'status'    => true,
            'response'  => $data,
            'message'   => $message
        ], 201);
    }

    /**
     * @param null $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public function success($data = null, int $status = 200, string $message = 'Sucesso'): JsonResponse
    {
        return response()->json([
            'status'    => true,
            'response'  => $data,
            'message'   => $message
        ], $status);
    }

    /**
     * @param $data
     * @param string $message
     * @param int $status
     * @param bool $paramError
     * @return JsonResponse
     */
    public function error($data = null, $message = 'Error', $status = 400, $paramError = false): JsonResponse
    {
        if ($data instanceof ValidationException) {
            $response = [
                'status'        => false,
                'response'      => $data->details(),
                'message'       => $data->getMessage(),
                'paramError'    => true
            ];

            return response()->json($response, $status);
        }

        if ($data instanceof \Throwable) {
            $response = [
                'status'        => false,
                'response'      => $data->getMessage(),
                'message'       => $message,
                'paramError'    => $paramError
            ];

            return response()->json($response, $status);
        }

        return response()->json([
            'status'        => false,
            'response'      => $data,
            'message'       => $message,
            'paramError'    => $paramError
        ], $status);
    }
}
