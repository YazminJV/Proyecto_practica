<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    protected $table='categorias';

    protected function Productos():HasMany
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }
    protected $fillable=
    [
        'nombre_categoria',
        'descripcion'
    ];
    protected function casts():array{
        return[
            'created_at'=>'datetime',
            'updated_at'=>'datetime'
        ];
    }
}
