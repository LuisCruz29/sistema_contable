<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $permiso_id
 * @property $nombreEmpleado
 * @property $apellidoEmpleado
 * @property $telefono
 * @property $user
 * @property $password
 * @property $remember_token
 *
 * @property TblPermiso $tblPermiso
 * @property TblRegistroDiario[] $tblRegistroDiarios
 * @property TblLog[] $tblLogs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['permiso_id', 'nombreEmpleado', 'apellidoEmpleado', 'telefono', 'user','password'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tblPermiso()
    {
        return $this->belongsTo(TblPermiso::class, 'permiso_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tblRegistroDiarios()
    {
        return $this->hasMany(RegistroDiario::class, 'id', 'user_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tblLogs()
    {
        return $this->hasMany(Log::class, 'id', 'user_id');
    }
    
}
