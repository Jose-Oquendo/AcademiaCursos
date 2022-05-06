<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeDocenteRequest extends FormRequest
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
            'nombre'=>'required',
            'apellido'=>'required',
            'edad'=>'required|max:2',
            // 'email'=>'required|email',
            'email'=>'required',


            'email'=>'email:rfc,dns',


            'ocupacion'=>'required',
            'foto'=>'required|image|mimes:jpg,png|dimensions:min_width=500,min_height=500,max_width=1024,max_height=1024',
        ];
    }
}



