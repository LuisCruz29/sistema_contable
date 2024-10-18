<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblPermiso
 *
 * @property $id
 * @property $rol
 * @property $ingresarRegistroDiario
 * @property $consultarRegistroDiario
 * @property $consultarCuentasT
 * @property $consultarEstadosFinancieros
 * @property $crearUsuarios
 * @property $gestionarPermisos
 *
 * @property User[] $users
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TblPermiso extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['rol', 'ingresarRegistroDiario', 'consultarRegistroDiario', 'consultarCuentasT', 'consultarEstadosFinancieros', 'crearUsuarios', 'gestionarPermisos'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(\App\Models\User::class, 'id', 'permiso_id');
    }
    
}
