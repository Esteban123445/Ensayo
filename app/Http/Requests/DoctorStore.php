<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorStore extends FormRequest
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
            'RUT'=> 'required|min:3|max:100',
            'nombres'=>' required|min:3|max:150',
            'apellidos'=> 'required|min:3|max:150',
            'email'=> 'required|min:3|max:150',
            'direccion'=> 'required|min:3|max:150',
            'especialidad'=> 'required'
        ];
    }
}
