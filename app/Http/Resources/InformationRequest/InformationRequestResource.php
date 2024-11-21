<?php

namespace App\Http\Resources\InformationRequest;

use Illuminate\Http\Resources\Json\JsonResource;

class InformationRequestResource extends JsonResource
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
            'name' => $this->full_name,
            'subject' => $this->request_information_subject,
            'step' => $this->request_step,
             'is_confirmed' => $this->is_confirmed,
             'is_declined' => $this->is_declined,
             'total' => $this->total_amount,

        ];
    }
}
