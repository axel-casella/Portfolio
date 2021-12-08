<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'porcentaje' => 'required | numeric | min:1 | max:100',
            'Habilidad Técnica' => 'required | min:1 | max:64',
            'Habilidad Profesional' => 'required | min:1 | max:64',   
        ];
    }
}
