<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuentas extends Model
{
    /** @use HasFactory<\Database\Factories\CuentasFactory> */
    use HasFactory;

    protected $table = 'tbl_cuentas';
    
    public function registroDiario(){
        $this->hasMany(RegistroDiario::class);
    }
}
