<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'membership' => $this->membership_status,
            'survey_request_count' => $this->survey_request_count,
            'information_request_count' => $this->information_request_count,
            'requests_closed_count' => 3,
            'under_processing_count' => 0,
            'university_messages_count' => $this->university_messages_count,
            'survey_request_step' => $this->survey_request_step,
            'information_request_step' => $this->information_request_step,
            'cart_count' => $this->shopping_cart_count,
            'token' => 'Bearer ' .$this->token,

        ];
    }
}
