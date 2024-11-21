<?php

namespace App\Http\Resources\ResearchPaper;

use Illuminate\Http\Resources\Json\JsonResource;

class ResearchPaperResource extends JsonResource
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
            'editor' => $this->editor,
            'title' => $this->title,
            'description' => $this->description,

        ];
    }
}
