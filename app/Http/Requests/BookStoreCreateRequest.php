<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreCreateRequest extends FormRequest
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
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_ch' => 'nullable|max:255',
            'description_ar' => 'nullable|max:20000',
            'description_en' => 'nullable|max:20000',
            'description_ch' => 'nullable|max:20000',
            'series_ar' => 'required|max:255',
            'series_en' => 'required|max:255',
            'series_ch' => 'nullable|max:255',
            'cover_ar' => 'required|max:255',
            'cover_en' => 'required|max:255',
            'cover_ch' => 'nullable|max:255',
            'additional_information_ar' => 'nullable|max:20000',
            'additional_information_en' => 'nullable|max:20000',
            'additional_information_ch' => 'nullable|max:20000',
            'contents_ar' => 'nullable|max:20000',
            'contents_en' => 'nullable|max:20000',
            'contents_ch' => 'nullable|max:20000',
            'book_type' => 'required|in:soft_copy,hard_copy',
            'background_image' => 'required|mimes:jpeg,png,jpg',
            'published_year' => 'required|date_format:Y',
            'price' => 'required|numeric',
            'printing_number' => 'required|integer',
            'show_home_page' => 'required',
            'book_category_id' => 'required|exists:book_categories,id',
            'author_id' => 'required|exists:authors,id',

        ];
    }


    public function messages(): array
    {
        return [

            'title_ar.required' => trans('dashboard.book_title_ar_required'),
            'title_ar.max' => trans('dashboard.book_title_ar_max'),
            'title_en.required' => trans('dashboard.book_title_en_required'),
            'title_en.max' => trans('dashboard.book_title_en_max'),
            'title_ch.max' => trans('dashboard.book_title_ch_max'),
            'description_ar.max' => trans('dashboard.book_description_ar_max'),
            'description_en.max' => trans('dashboard.book_description_en_max'),
            'description_ch.max' => trans('dashboard.book_description_ch_max'),
            'series_ar.required' => trans('dashboard.book_series_ar_required'),
            'series_ar.max' => trans('dashboard.book_series_ar_max'),
            'series_en.required' => trans('dashboard.book_series_en_required'),
            'series_en.max' => trans('dashboard.book_series_en_max'),
            'series_ch.max' => trans('dashboard.book_series_ch_max'),
            'cover_ar.required' => trans('dashboard.book_cover_ar_required'),
            'cover_ar.max' => trans('dashboard.book_cover_ar_max'),
            'cover_en.required' => trans('dashboard.book_cover_en_required'),
            'cover_en.max' => trans('dashboard.book_cover_en_max'),
            'cover_ch.max' => trans('dashboard.book_cover_ch_max'),
            'additional_information_ar.max' => trans('dashboard.additional_information_ar_max'),
            'additional_information_en.max' => trans('dashboard.additional_information_en_max'),
            'additional_information_ch.max' => trans('dashboard.additional_information_ch_max'),
            'contents_ar.max' => trans('dashboard.contents_ar_max'),
            'contents_en.max' => trans('dashboard.contents_en_max'),
            'contents_ch.max' => trans('dashboard.contents_ch_max'),
            'book_type.required' => trans('dashboard.book_book_type_required'),
            'book_type.in' => trans('dashboard.book_book_type_in'),
            'background_image.required' => trans('dashboard.book_background_image_required'),
            'background_image.mimes' => trans('dashboard.book_background_image_mimes'),
            'published_year.required' => trans('dashboard.book_published_year_required'),
            'published_year.date_format' => trans('dashboard.book_published_year_date_format'),
            'price.required' => trans('dashboard.book_price_required'),
            'price.numeric' => trans('dashboard.book_price_numeric'),
            'printing_number.required' => trans('dashboard.book_printing_number_required'),
            'printing_number.integer' => trans('dashboard.printing_number_integer'),
            'show_home_page.required' => trans('dashboard.book_show_home_page_required'),
            'book_category_id.required' => trans('dashboard.book_book_category_id_required'),
            'author_id.required' => trans('dashboard.author_id_required'),
            'book_category_id.exists' => trans('dashboard.book_book_category_id_exists'),
            'author_id.exists' => trans('dashboard.author_id_exists'),



        ];
    }
}
