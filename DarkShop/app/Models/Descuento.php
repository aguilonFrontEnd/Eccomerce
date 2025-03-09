<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    use HasFactory;

    protected $table = 'descuentos';

    protected $fillable = [
        'producto_id',
        'porcentaje',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
