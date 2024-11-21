<?php

namespace App\Http\Resources\Setting;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            'logo' => $this->logo,
            'king_faisal_and_family_image' => $this->king_faisal_and_family_image,
            'website_name_ar' => $this->website_name_ar,
            'website_name_en' => $this->website_name_en,
            'website_name_ch' => $this->website_name_ch,
            'email' => $this->email,
            'location' => $this->location,
            'facebook_url' => $this->facebook_url,
            'youtube_url' => $this->youtube_url,
            'linkedin_url' => $this->linkedin_url,
            'twitter_url' => $this->twitter_url,
            'instagram_url' => $this->instagram_url,
            'membership_request' => $this->membership_request,
            'information_request' => $this->information_request,
            'survey_request' => $this->survey_request,
        ];
    }
}
