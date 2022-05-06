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
            'name'=>'required',
            'lastName'=>'required',
            'edad'=>'required|max:2',
            'email'=>'required|email',
            'ocupacion'=>'required',
            'foto'=>'required|image|mimes:jpg,png|dimensions:min_width=1024,min_height=1024',
        ];
    }
}
