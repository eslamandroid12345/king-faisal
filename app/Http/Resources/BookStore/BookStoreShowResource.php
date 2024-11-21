<?php

namespace App\Http\Resources\BookStore;

use Illuminate\Http\Resources\Json\JsonResource;

class BookStoreShowResource extends JsonResource
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
            'author' => $this->author->full_name,
            'price' => $this->price,
            'published_year' => $this->published_year,
            'lang' => $this->bookCategory->name,
            'series' => $this->series,
            'printing_number' => $this->printing_number,
            'cover' => $this->cover,
            'about_book' => $this->description,
            'about_author' => $this->author->about_author,
            'contents' => $this->contents,
            'additional_information' => $this->additional_information,


        ];
    }
}
