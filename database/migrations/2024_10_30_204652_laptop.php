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
        Schema::create('laptop', function (Blueprint $table) {
            $table->id();
            $table->string('Marca', 255);
            $table->string('Modelo', 255)->nullable();
            $table->string('Procesador', 255);
            $table->string('almacenamiento',100);
            $table->timestamps();

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
