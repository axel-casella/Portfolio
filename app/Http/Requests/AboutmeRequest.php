<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutmeRequest extends FormRequest
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
            'service' => 'required | min:1 | max:100',
            'personaldescription' => 'required | min:1 | max:500',
            'servicedescription' => 'required | min:1 | max:200',
            'image_aboutme' => 'required', 
            'review' => 'required',
            'do' => 'required',
        ];
    }
}
