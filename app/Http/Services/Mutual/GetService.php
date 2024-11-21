<?php

namespace App\Http\Services\Mutual;

use App\Http\Traits\Response;
use App\Repository\RepositoryInterface;
use Exception;
use Illuminate\Http\JsonResponse;

class GetService
{
    use Response;

    public function handle($resource,RepositoryInterface $repository, $method = 'getAll', $parameters = [], $is_instance = false,$message = 'Data Get Successfully'): JsonResponse
    {
        try {

            $data = $repository->$method(...$parameters);
            $records = $is_instance ? new $resource($data) : $resource::collection($data);
            return $this->responseSuccess(message: $message, data: $records);
        } catch (Exception $exception) {
            return $this->responseFail(message: __('user.data_not_found'));
        }
    }


    public function handleResponse($resource,RepositoryInterface $repository, $method = 'getAll', $parameters = [], $is_instance = false)
    {
        try {

            $data = $repository->$method(...$parameters);
            return $is_instance ? new $resource($data) : $resource::collection($data);

        } catch (Exception $exception) {
            return $this->responseFail(message: __('user.data_not_found'));
        }
    }


}
