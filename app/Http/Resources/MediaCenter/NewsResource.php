<?php

namespace App\Http\Resources\MediaCenter;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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
            'image' => $this->image_url,
            'published_date' => Carbon::parse($this->published_date)->translatedFormat('d F Y'),
            'description' => $this->description,

        ];
    }
}
