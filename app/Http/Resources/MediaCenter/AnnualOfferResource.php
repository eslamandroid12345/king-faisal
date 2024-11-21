<?php

namespace App\Http\Resources\MediaCenter;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AnnualOfferResource extends JsonResource
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
            'image' => $this->image_url,
            'title' => $this->title,
            'pdf_url' => $this->pdf_url,
            'year' => $this->created_at->format('Y'),

        ];
    }
}
