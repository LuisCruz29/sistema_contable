<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuentas extends Model
{
    /** @use HasFactory<\Database\Factories\CuentasFactory> */
    use HasFactory;

    protected $table = 'tbl_cuentas';

    protected $fillable = ['nombreCuenta','descripcion','tipo'];
    
    
    // public function registroDiario(){
    //     $this->hasMany(TblRegistroDiario::class);
    // }
    
}
