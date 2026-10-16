<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curso_estudiante extends Model
{
    use HasFactory;
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
