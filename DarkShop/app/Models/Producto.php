<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'categoria_id',
        'talla_id',
        'imagen_url'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function talla()
    {
        return $this->belongsTo(Talla::class);
    }

    public function inventario()
    {
        return $this->hasMany(Inventario::class);
    }

    public function descuentos()
    {
        return $this->hasMany(Descuento::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function valoraciones()
    {
        return $this->hasMany(Valoracion::class);
    }
}
