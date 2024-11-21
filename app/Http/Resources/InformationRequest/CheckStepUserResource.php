<?php

namespace App\Http\Resources\InformationRequest;

use Illuminate\Http\Resources\Json\JsonResource;

class CheckStepUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'step' => $this->resource['step'],
        ];
    }
}
