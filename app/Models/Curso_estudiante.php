<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Curso_estudiante extends Model
{
    protected $table= 'curso_estudiantes';
    protected $fillable=[
        'id_estu',
        'id_curso',
        'inscripcion'
    ];
    protected function casts():array{
        return[
            'fecha_inscripcion'=>'datetime',
            'inscripcion'=>Estado::class
        ];
    }
}
