<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCampsiteRequest extends Request
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
            'name' => 'required',
            'address' => 'required',
            'about' => 'required',
            'arrival_info' => 'required',
            'check_in_time' => 'required',
            'check_out_time' => 'required',
            'parking_info' => 'required',
            'zones' => 'required|array'
        ];
    }
}
