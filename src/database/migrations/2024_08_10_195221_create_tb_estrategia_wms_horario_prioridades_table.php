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
        Schema::create('tb_estrategia_wms_horario_prioridades', function (Blueprint $table) {
            $table->id("cd_estrategia_wms_horario_prioridade");
            $table->integer("cd_estrategia_wms");
            $table->foreign('cd_estrategia_wms')->references('cd_estrategia_wms')->on('tb_estrategia_wms');
            $table->string('ds_horario_inicio');
            $table->string('ds_horario_final');
            $table->integer('nr_prioridade');
            $table->timestamp('dt_registro');
            $table->timestamp('dt_modificado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_estrategia_wms_horario_prioridades');
    }
};
