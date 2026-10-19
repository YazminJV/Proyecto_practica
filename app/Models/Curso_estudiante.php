<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\inscripcion;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curso_estudiante extends Model
{
    use HasFactory;
    protected $table= 'curso_estudiantes';
    protected $fillable=[
        'id_estu',
        'id_curso',
        'inscripcion',
        'fecha_inscripcion',
        'progreso'      
    ];
    protected function casts():array{
        return[
            'fecha_inscripcion'=>'datetime',
            'inscripcion'=>inscripcion::class
        ];
    }
}
