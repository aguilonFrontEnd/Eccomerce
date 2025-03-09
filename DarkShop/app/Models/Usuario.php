<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'contraseña',
        'telefono',
        'direccion',
        'fecha_registro',
        'rol_id',
    ];

    protected $hidden = [
        'contraseña',
        'remember_token',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
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
