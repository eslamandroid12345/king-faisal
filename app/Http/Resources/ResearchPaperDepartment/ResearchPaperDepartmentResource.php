<?php

namespace App\Http\Resources\ResearchPaperDepartment;

use Illuminate\Http\Resources\Json\JsonResource;

class ResearchPaperDepartmentResource extends JsonResource
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
