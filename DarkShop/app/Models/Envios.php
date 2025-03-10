<?php

namespace App\Models;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $table = 'envios';

    protected $fillable = [
        'pedido_id',
        'direccion_envio',
        'fecha_envio',
        'estado'
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
