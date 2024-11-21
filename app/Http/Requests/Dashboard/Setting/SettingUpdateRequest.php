<?php
namespace App\Http\Requests\Dashboard\Setting;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {


        return [

            'logo' => 'nullable|mimes:jpg,png,jpeg',
            'king_faisal_and_family_image' => 'nullable|mimes:jpg,png,jpeg',
            'website_name_ar' => 'required|string|max:255',
            'website_name_en' => 'required|string|max:255',
            'website_name_ch' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'location' => 'required',
            'facebook_url' => 'nullable|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/',
            'youtube_url' => 'nullable|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/',
            'linkedin_url' => 'nullable|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/',
            'twitter_url' => 'nullable|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/',
            'instagram_url' => 'nullable|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/',
            'membership_request' => 'required|not_in:0|numeric',
            'information_request' => 'required|not_in:0|numeric',
            'survey_request' => 'required|not_in:0|numeric',
        ];
    }


    public function messages(): array
    {
        return [
            'logo.mimes' => trans('dashboard.logo_mimes'),
            'king_faisal_and_family_image.mimes' => trans('dashboard.king_faisal_and_family_image_mimes'),
            'website_name_ar.required' => trans('dashboard.website_name_ar_required'),
            'website_name_ar.string' => trans('dashboard.website_name_ar_string'),
            'website_name_ar.max' => trans('dashboard.website_name_ar_max'),
            'website_name_en.required' => trans('dashboard.website_name_en_required'),
            'website_name_en.string' => trans('dashboard.website_name_en_string'),
            'website_name_en.max' => trans('dashboard.website_name_en_max'),
            'website_name_ch.string' => trans('dashboard.website_name_ch_string'),
            'website_name_ch.max' => trans('dashboard.website_name_ch_max'),
            'email.required' => trans('dashboard.email.required_'),
            'email.email' => trans('dashboard.email_email'),
            'email.max' => trans('dashboard.email_max'),
            'location.required' => trans('dashboard.location_required'),
            'facebook_url.regex' => trans('dashboard.facebook_url_regex'),
            'youtube_url.regex' => trans('dashboard.youtube_url_regex'),
            'linkedin_url.regex' => trans('dashboard.linkedin_url_regex'),
            'twitter_url.regex' => trans('dashboard.twitter_url_regex'),
            'instagram_url.regex' => trans('dashboard.instagram_url_regex'),
            'membership_request.required' => trans('dashboard.membership_request_required'),
            'membership_request.not_in' => trans('dashboard.membership_request_not_in'),
            'membership_request.numeric' => trans('dashboard.membership_request_numeric'),
            'information_request.required' => trans('dashboard.information_request_required'),
            'information_request.not_in' => trans('dashboard.information_request_not_in'),
            'information_request.numeric' => trans('dashboard.information_request_numeric'),
            'survey_request.required' => trans('dashboard.survey_request_required'),
            'survey_request.not_in' => trans('dashboard.survey_request_not_in'),
            'survey_request.numeric' => trans('dashboard.survey_request_numeric'),

        ];
    }
}
