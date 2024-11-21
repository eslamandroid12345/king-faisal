<?php

namespace App\Http\Resources\BookStore;

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
            'image' => $this->background_image,
            'title' => $this->title,
            'author' => $this->author->full_name
        ];
    }
}
