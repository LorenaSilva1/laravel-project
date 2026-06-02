<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|max:100|min:3',
            'turma' => 'required',
            'curso_id' => 'required|exists:cursos,id',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Este campo é obrigatório.',
        ];
    }
}