<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->string('idCurso', 3);
            $table->string('nombre', 5);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('curso');
    }
};
