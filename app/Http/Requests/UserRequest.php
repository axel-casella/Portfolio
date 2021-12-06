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
            'message' => 'required | min:5 | max:10',
            'name' => 'required | min:5 | max:64',
            'title_job' => 'required | min:5 | max:200',
            'email'=> 'required | min:15 | max:64',
            'tel' => 'required | numeric | min:64',
            'address' => 'required | min:10 | max:128',
            'file' => 'image:jpg | dimensions:min_width=100,min_height=200 | size:512',
            'facebook' => 'required | min:10 | max:20',
            'twitter' => 'required | min:10 | max:20',
            'github' => 'required | min:10 | max:20',
            'personaldescription' => 'required | min:10 | max:200',
            'service' => 'required | min:10 | max:20',
            'servicedescription' => 'required | min:10 | max:200',
            'title_whatido' => 'required | min:10 | max:200',
            'title_aboutme' => 'required | min:10 | max:200',

        ];
    }
}
