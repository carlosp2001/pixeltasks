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
        //
        Schema::create('tasks', function (Blueprint $table) {
                        $table->id(); // Columna de ID autoincremental
                        $table->text('content');
                        $table->timestamps(); // Columnas para registro de fecha y hora de creación y actualización
                    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
