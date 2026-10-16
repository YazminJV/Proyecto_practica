<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $table='products';
    protected function categoria():BelongsTo
    {
        return $this->belongsTo(categoria::class,'id_categoria');
    }

    protected $fillable= [
        'name',
        'price',
        'stock',
        'id_categoria',
        'descripcion',
        'imagen'
    ];
    protected function casts():array{
        return[
            'price'=>'decimal:2',
            'stock'=> 'integer',
            'id_categoria'=>'integer'
        ];
    }
}
