<?php

namespace App\Http\Resources\Antique;

use Illuminate\Http\Resources\Json\JsonResource;

class AntiqueResource extends JsonResource
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
            'image' => $this->oneImage->image

        ];
    }
}
