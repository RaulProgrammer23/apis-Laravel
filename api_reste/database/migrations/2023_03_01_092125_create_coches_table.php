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
        Schema::create('coches', function (Blueprint $table) {
            $table->id();
                $table->string('matricula')->unique();
                $table->string('modelo')->nullable(false);
                $table->string('color')->nullable(false);
                $table->timestamp('fecha_matricula');
                $table->float('precio')->nullable(false);
                $table->unsignedBigInteger('id_marca');
                $table->foreign('id_marca')->references('id')->on('marcas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coches');
    }
};
