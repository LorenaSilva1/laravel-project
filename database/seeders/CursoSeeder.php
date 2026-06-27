<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        Curso::create([
            'nome' => 'Plano Mensal',
            'duracao' => 1
        ]);

        Curso::create([
            'nome' => 'Plano Trimestral',
            'duracao' => 3
        ]);

        Curso::create([
            'nome' => 'Plano Anual',
            'duracao' => 12
        ]);
    }
}