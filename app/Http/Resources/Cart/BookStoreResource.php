<?php

namespace App\Http\Resources\Cart;

use Illuminate\Http\Resources\Json\JsonResource;

class BookStoreResource extends JsonResource
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
            'image' => $this->background_image,
            'price' => $this->price
        ];
    }
}
