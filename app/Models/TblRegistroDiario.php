<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblRegistroDiario
 *
 * @property $id
 * @property $codigoTransaccion
 * @property $cuenta_id
 * @property $user_id
 * @property $debe
 * @property $haber
 * @property $descripcion
 * @property $fecha
 *
 * @property TblCuenta $tblCuenta
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TblRegistroDiario extends Model
{
    
    protected $perPage = 20;
    protected $table = 'tbl_RegistroDiario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigoTransaccion', 'cuenta_id', 'user_id', 'debe', 'haber', 'descripcion', 'fecha'];
    public $timestamps = false;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tblCuenta()
    {
        return $this->belongsTo(\App\Models\TblCuenta::class, 'cuenta_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
