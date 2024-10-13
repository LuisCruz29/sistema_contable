<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceComprobacion extends Model
{
    /** @use HasFactory<\Database\Factories\BalanceComprobacionFactory> */
    use HasFactory;

    protected $table = 'tbl_BalanceComprobacion';
}
