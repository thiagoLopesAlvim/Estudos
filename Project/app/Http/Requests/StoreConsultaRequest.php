<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultaRequest extends FormRequest
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
            'tipconsulta' => 'required|min:3|max:255',
            'nomecliente' => 'required|min:3|max:255',
            'telefone' => 'required|min:3|max:255',
            'CPF' => 'required|min:3|max:255',
            'endereco' => 'min:3|max:255',
            'observacao' => 'required|min:3|max:1000000',
            'tippagamento'=> 'min:1|max:1',
            'dtnascimento'=>'min:1|max:20',
            'dtconsulta'=>'min:1|max:25',
            'pathImg'=> 'min:1|image|max:10000',
        ];

        if($this->method() == 'PUT'){
            $rules['tipconsulta'] = ['required','min:3','max:255',"unique:consultas,tipconsulta,{$this->id},id"];
        }


        return $rules;
    }
}