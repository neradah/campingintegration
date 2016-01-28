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
            'campsites' => 'required|array',
            'name' => 'required',
            'city' => 'required',
            'category' => 'required',
            'slug' => 'required',
            'start' => 'required|date',
            'end' => 'required|date',
            'thumbnail_upload' => 'required|image',
            'banner_upload' => 'required|image',
            'discount' => 'numeric',
            'early_bird_start' => 'date',
            'early_bird_end' => 'date',
            'pitch' => 'required|array',
            'product' => 'required|array'
        ];
    }
}
