<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estudiante extends Model
{
    use HasFactory;
    protected $table= 'estudiantes';
    protected $fillable=[
        'codigo_estudiante',
        'user_id',

    ];
    public function cursos():BelongsToMany{
        return $this->belongdToMany(
            Curso::class,
            'curso_estudiantes',
            'id_estu',
            'id_curso'
        );
    }
    public function User():BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}
