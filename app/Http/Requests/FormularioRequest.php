<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
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
            'nome' => ['required', 'max:250', 'min:4'],
            'escolaridade' => ['required', 'min:1'],
            'cargo' => ['required', 'min:1'],
            'data_nascimento' => ['required'],
            'sexo' => ['max:1', 'string'],
            'rg' => ['required', 'string', 'max:16'],
            'rg_org' => ['required', 'string', 'max:16'],
            'cpf' => ['required', 'unique:formularios', 'max:16'],
            'nome_mae' => ['max:200'],
            'telefone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max: 200'],
            'cep' => ['required', 'max:9'],
            'uf' => ['required', 'max:2'],
            'cidade' => ['required', 'max:100'],
            'bairro' => ['required', 'max:100'],
            'rua' => ['required', 'max:100'],
            'numero' => ['required', 'integer:', 'max:9999'],
            'complemento' => ['max:200'],
            'anexocpf' => ['required', 'mimes:pdf'],
            'anexorg' => ['required', 'mimes:pdf'],
            'anexoescolaridade' => ['required', 'mimes:pdf'],
            'anexocurriculum' => ['required', 'mimes:pdf'],
            'anexoconselho' => ['mimes:pdf'],
            'anexograduacao' => ['mimes:pdf'],
            'anexodoutorado' => ['mimes:pdf'],
            'anexomestrado'  => ['mimes:pdf'],
            'anexoposgraduacao1' => ['mimes:pdf'],
            'anexoposgraduacao2' => ['mimes:pdf'],
            'anexoqualific1' => ['mimes:pdf'],
            'anexoqualific2' => ['mimes:pdf'],
            'anexoqualific3' => ['mimes:pdf'],
            'anexoqualific4' => ['mimes:pdf'],
            'anexoqualific5' => ['mimes:pdf'],
            'anexoespe1' => ['mimes:pdf'],
            'anexoespe2' => ['mimes:pdf'],
            'anexoespe3' => ['mimes:pdf'],
            'anexoespe4' => ['mimes:pdf'],
            'anexolaudo' => ['mimes:pdf'],
        ];
    }
}
