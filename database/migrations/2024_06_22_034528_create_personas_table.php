<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo');
            $table->string('image')->nullable();
            $table->char('cPerApellido', 50);
            $table->char('cPerNombre', 50)->nullable();
            $table->string('cPerDireccion', 100)->nullable();
            $table->date('dPerFecNac')->nullable();
            $table->integer('nPerEdad');
            $table->decimal('nPerSueldo', 6, 2);
            $table->char('cPerSexo', 10);  
            $table->string('cPerRnd', 50)->default('');
            $table->char('cPerEstado', 1)->default('1');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
