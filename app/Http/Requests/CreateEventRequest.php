<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEventRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required",
            "slug" => "required",
            "type" => "required",
            "location" => "required",
            "start" => "required",
            "end" => "required",
            "thumbnail" => "",
            "banner" => "",
            "discount" => "",
            "show_homepage" => "",
            "about_info" => "required",
            "parking_info" => "required",
            "arrival_info" => "required",
            "map" => "",
            "pitch" => ""
        ];
    }
}
