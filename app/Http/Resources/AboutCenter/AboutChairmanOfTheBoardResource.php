<?php

namespace App\Http\Resources\AboutCenter;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutChairmanOfTheBoardResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,

        ];
    }
}
