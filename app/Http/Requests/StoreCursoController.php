<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCursoController extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:40',
            'description'=>'required|min:40',
            'category'=>'required|max:20'
        ];
    }
    //Modificamos el texto que se mostrara por defecto
    public function attributes(){
        return[
            'name'=>'name of the course',
            'description'=>'description of the course',
            'category'=>'category of the course',
        ];
    }
    //Modificamos el texto que se mostrara sin tomar en cuenta los mensages por defecto
    public function messages(){
        return[
            'name.required'=>'the name of the course is required',
        ];
    }
}
