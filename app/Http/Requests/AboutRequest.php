<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AboutRequest extends Request
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

            'title' => 'required',

            'text' => 'required',

            'name' => 'required',

            'position' => 'required',

            'img' => 'required',


        ];
    }
    public function messages(){

        return[
            'title.required' => 'Title boş saxlama',

            'text.required' => 'Text boş saxlama',

            'name.required' => 'Name boş saxlama',

            'position.required' => 'Position boş saxlama',

            'img.required' => 'Şəkil yüklə',

            'description.required' =>   'Descriptionu boş saxlama'  ,

        ];

    }
}
