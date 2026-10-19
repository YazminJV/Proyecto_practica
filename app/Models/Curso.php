<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Estado;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curso extends Model
{
    use HasFactory;
    protected $table= 'cursos';
    protected $fillable=[
        'nombre_curso',
        'descripcion',
        'precio',
        'estado'
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
