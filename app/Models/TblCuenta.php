<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TblRegistroDiario;
use App\Models\CuentasT;
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
        return $this->hasMany(TblRegistroDiario::class, 'cuenta_id','id');
    }
    
    public function tblCuentasT()
    {
        return $this->hasMany(CuentasT::class,'cuentas_id','id');
    }

        public static function activos()
    {
        return self::where('tipo', 'activo')->get();
    }

    public static function pasivos()
    {
        return self::where('tipo', 'pasivo')->get();
    }

    public static function capital()
    {
        return self::where('tipo', 'capital')->get();
    }

}
