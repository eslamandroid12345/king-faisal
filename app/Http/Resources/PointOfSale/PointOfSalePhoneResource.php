<?php

namespace App\Http\Resources\PointOfSale;

use Illuminate\Http\Resources\Json\JsonResource;

class PointOfSalePhoneResource extends JsonResource
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

            'phone' => $this->phone

        ];
    }
}
