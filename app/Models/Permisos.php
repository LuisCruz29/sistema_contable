<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    /** @use HasFactory<\Database\Factories\PermisosFactory> */
    use HasFactory;
    protected $table = 'tbl_permisos';
}
