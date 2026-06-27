<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disciplina;

class DisciplinaSeeder extends Seeder
{
    public function run(): void
    {
        Disciplina::create([
            'nome' => 'Musculação',
            'carga_horaria' => 12
        ]);

        Disciplina::create([
            'nome' => 'Crossfit',
            'carga_horaria' => 8
        ]);

        Disciplina::create([
            'nome' => 'Pilates',
            'carga_horaria' => 6
        ]);

        Disciplina::create([
            'nome' => 'Funcional',
            'carga_horaria' => 10
        ]);
    }
}