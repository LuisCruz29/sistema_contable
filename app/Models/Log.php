<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'tbl_logs'; // Nombre de la tabla en la base de datos

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'user_id', 'fecha_hora', 'accion', 'modulo', 'descripcion', 'tipoLog'
    ];

    // Si no tienes las columnas created_at y updated_at en la tabla, puedes poner esto en false
    public $timestamps = false; 
}
