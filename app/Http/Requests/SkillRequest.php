<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SkillRequest extends Request
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

//           'description' => 'required',

            'percent' => 'required',

        ];
    }

    public function messages(){

        return[

            'name.required' => 'Name boş saxlama',

//            'description.required' => 'Description  boş saxlama',

            'percent.required' => 'Percent boş saxlama',

        ];

    }
}
