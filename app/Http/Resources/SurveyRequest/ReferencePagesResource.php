<?php

namespace App\Http\Resources\SurveyRequest;

use Illuminate\Http\Resources\Json\JsonResource;

class ReferencePagesResource extends JsonResource
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
            'reference_name' => $this->reference->reference_name,
            'reference_type' => $this->reference->reference_type,
            'pages_number' => $this->reference->pages_number,
        ];
    }
}
