<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Curso extends Model
{
    protected $table= 'cursos';
    protected $fillable=[
        'nombre_curso'
    ];
    protected function casts():array{
        return[
            'precio'=>'decimal:2',
            'estado'=>Estado::class
        ];
    }
    public function estudiantes():BelongsToMany{
        return $this->belongsToMany(
            Estudiante::class,
            'curso_estudiantes',
            'id_curso',
            'id_estu'
        );

    }
}
