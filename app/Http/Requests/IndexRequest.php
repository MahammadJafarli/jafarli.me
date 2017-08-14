<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class IndexRequest extends Request
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

            'email' => 'required',

            'subject' => 'required',

        ];
    }

    public function messages(){

        return[

            'name.required' => 'Name boş saxlama',

            'Email.required' => 'Email boş saxlama',

            'subject.required' => 'Subject boş saxlama',

        ];

    }
}
