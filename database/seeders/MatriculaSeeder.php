<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;

class MatriculaSeeder extends Seeder
{
    public function run(): void
    {
        Matricula::create([
            'aluno_id' => 1,
            'disciplina_id' => 1
        ]);

        Matricula::create([
            'aluno_id' => 2,
            'disciplina_id' => 2
        ]);

        Matricula::create([
            'aluno_id' => 3,
            'disciplina_id' => 3
        ]);
    }
}