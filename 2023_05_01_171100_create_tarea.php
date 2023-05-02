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
        Schema::create('tarea', function (Blueprint $table) {
            $table->id()->unique();
            $table->string(column:'nombre');
            $table->string(column:'descripción');
            $table->string(column:'Estado');
            $table->date(column:'fecha_inicio');
            $table->date(column:'fecha_fin')->nullable();
            $table->foreign('proyecto_id')->references('id')->on('proyecto');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarea');
    }
};
