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
        Schema::create('tbl_permisos', function (Blueprint $table) {
            $table->id();
            $table->string('rol');
            $table->boolean('ingresarRegistroDiario');
            $table->boolean('consultarRegistroDiario');
            $table->boolean('consultarCuentasT');
            $table->boolean('consultarEstadosFinancieros');
            $table->boolean('crearUsuarios');
            $table->boolean('gestionarPermisos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_permisos');
    }
};
