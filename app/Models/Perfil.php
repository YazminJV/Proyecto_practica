<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perfil extends Model
{
    use HasFactory;
    protected $table='perfiles';

    protected $fillable=[
        'user_id',
        'nombre_perfil',
        'telefono',
        'direccion',
        'biografia',
        'foto',
        'fecha_nacimiento',
    ];
    protected function casts():array{
        return[
            'fecha de nacimiento'=>'date',
            'user_id'=>'integer',
            'telefono'=>'string'
        ];
    }

    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
