<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailUsuario extends Model
{
    use HasFactory;

    protected $table = 'emails_usuarios';

    protected $fillable = ['email'];
}
