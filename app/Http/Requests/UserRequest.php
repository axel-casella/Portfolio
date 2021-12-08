<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'message' => 'required | min:5 | max:200',
            'name' => 'required | min:5 | max:64',
            'title_job' => 'required | min:5 | max:200',
            'email'=> 'required',
            'tel' => 'required | numeric',
            'address' => 'required',
            'file' => 'image:jpg | dimensions:min_width=100,min_height=200',
            'facebook' => 'required',
            'twitter' => 'required',
            'github' => 'required',
            //'personaldescription' => 'required | min:10 | max:200',
            //'service' => 'required | min:10 | max:20',
            //'servicedescription' => 'required | min:10 | max:200',
            //'title_whatido' => 'required | min:10 | max:200',
            //'title_aboutme' => 'required | min:10 | max:200',
            //'porcentaje' => 'required | numeric | min:1 | max:100',
            //'Habilidad Técnica' => 'required | min:1 | max:64',
            //'Habilidad Profesional' => 'required | min:1 | max:64',   
        ];
    }
}
