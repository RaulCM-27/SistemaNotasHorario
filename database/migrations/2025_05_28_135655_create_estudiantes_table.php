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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('idEstu', 12);
            $table->string('nombreEstu', 50);
            $table->string('apellidoEstu', 50);
            $table->string('nombreAcu', 50);
            $table->string('apellidoAcu', 50);
            $table->string('telefono', 10);
            $table->primary('idEstu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
