<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
        'nome',
        'carga_horaria'
    ];

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}