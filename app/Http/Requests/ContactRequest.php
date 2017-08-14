<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request
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

            'location' => 'required',

            'telephone' => 'required',

            'email' => 'required',

            'text' => 'required',

            'map' => 'required',

        ];
    }

    public function messages(){

        return[

            'location.required' => 'Locationu boş buramayın',

            'telephone.required' => 'Telephone daxil edin',

            'email.required' => 'Emaili daxil edin',

            'text.required' => 'Texti boş buraxmayın',

            'map.required' => 'Goole Mapi daxil edin',

        ];

    }
}
