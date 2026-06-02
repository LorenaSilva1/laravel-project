<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatriculaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'disciplina_id' => 'required|exists:disciplinas,id',
            'aluno_id' => 'required|exists:alunos,id',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Este campo é obrigatório.',
        ];
    }
}