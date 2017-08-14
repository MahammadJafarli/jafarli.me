<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ServiceRequest extends Request
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

            'description' => 'required',

            'icon' => 'required',

        ];
    }

    public function messages(){

        return[

            'name.required' => 'Name boş saxlama',

            'icon.required' => 'Icon  boş saxlama',

            'description.required' => 'Descriptionu boş saxlama',

        ];

    }
}
