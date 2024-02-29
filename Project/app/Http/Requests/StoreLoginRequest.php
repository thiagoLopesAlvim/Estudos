<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'min:3|max:255',
            'email' => 'required|min:3|max:255',
            'id' => 'min:3|max:255',
            'password' => 'required|min:3|max:255'
        ];

        if($this->method() == 'PUT'){
            $rules['email'] = ['required','min:3','max:255',"unique:users,tipconsulta,{$this->id},id"];
        }


        return $rules;
    }
}