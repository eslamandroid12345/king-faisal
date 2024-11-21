<?php

namespace App\Http\Resources\MediaCenter;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
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
            'video_url' => $this->video_url,
            'description' => $this->description,
            'published_date' => Carbon::parse($this->published_date)->translatedFormat('d F Y'),


        ];
    }
}
