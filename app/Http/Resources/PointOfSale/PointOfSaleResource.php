<?php

namespace App\Http\Resources\PointOfSale;

use Illuminate\Http\Resources\Json\JsonResource;

class PointOfSaleResource extends JsonResource
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

            'id' => $this->id,
            'name' => $this->name,
            'phones' => PointOfSalePhoneResource::collection($this->phones),
            'description' => $this->description,

        ];
    }
}
