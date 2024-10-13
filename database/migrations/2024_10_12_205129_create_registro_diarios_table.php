<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_RegistroDiario', function (Blueprint $table) {
            $table->id();
            $table->integer('codigoTransaccion');
            $table->integer('cuenta_id');
            $table->integer('user_id');
            $table->double('debe');
            $table->double('haber');
            $table->string('descripcion');
            $table->date('fecha');

            $table->foreign('cuenta_id')->references('id')->on('tbl_cuentas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_RegistroDiario');
    }
};
