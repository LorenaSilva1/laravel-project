<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        Aluno::create([
            'nome' => 'João Silva',
            'turma' => 2026,
            'curso_id' => 1
        ]);

        Aluno::create([
            'nome' => 'Maria Souza',
            'turma' => 2026,
            'curso_id' => 2
        ]);

        Aluno::create([
            'nome' => 'Carlos Lima',
            'turma' => 2026,
            'curso_id' => 3
        ]);
    }
}