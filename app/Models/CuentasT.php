<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TblCuenta;
class CuentasT extends Model
{
    /** @use HasFactory<\Database\Factories\CuentasTFactory> */
    use HasFactory;

    protected $table = 'tbl_CuentasT';
    protected $fillable = ['cuentas_id', 'debe', 'haber','fecha'];
    public $timestamps = false;

    public function tblCuenta()
    {
        return $this->belongsTo(TblCuenta::class, 'id','cuentas_id');
    }
}
