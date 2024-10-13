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
        Schema::create('tbl_CuentasT', function (Blueprint $table) {
            $table->id();
            $table->integer('cuentas_id')->unsigned();
            $table->foreign('cuentas_id')->references('id')->on('tbl_cuentas')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->double('debe');
            $table->double('haber');
            $table->date('fecha');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_CuentasT');
    }
};
