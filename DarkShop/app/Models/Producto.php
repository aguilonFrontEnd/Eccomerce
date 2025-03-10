<?php

namespace App\Models;

 
use App\Models\Talla;
use App\Models\Categoria;
use App\Models\Inventario;
use App\Models\Descuento;
use App\Models\Valoracion;
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

    public function valoraciones()
    {
        return $this->hasMany(Valoracion::class);
    }
}
