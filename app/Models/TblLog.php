<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblLog
 *
 * @property $id
 * @property $user_id
 * @property $fecha_hora
 * @property $accion
 * @property $modulo
 * @property $descripcion
 * @property $tipoLog
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TblLog extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'fecha_hora', 'accion', 'modulo', 'descripcion', 'tipoLog'];
    public $timestamps= false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
