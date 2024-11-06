<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TblRegistroDiario;
/**
 * Class TblCuenta
 *
 * @property $id
 * @property $nombreCuenta
 * @property $descripcion
 * @property $tipo
 *
 * @property TblBalanceComprobacion[] $tblBalanceComprobacions
 * @property TblCuentasT[] $tblCuentasTs
 * @property TblRegistroDiario[] $tblRegistroDiarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TblCuenta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombreCuenta', 'descripcion', 'tipo'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function tblBalanceComprobacions()
    // {
    //     return $this->hasMany(\App\Models\TblBalanceComprobacion::class, 'id', 'cuenta_id');
    // }
    
    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function tblCuentasTs()
    // {
    //     return $this->hasMany(\App\Models\TblCuentasT::class, 'id', 'cuentas_id');
    // }
    
    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    public function tblRegistroDiarios()
    {
        return $this->hasMany(TblRegistroDiario::class, 'cuenta_id', 'id');
    }
    
}
