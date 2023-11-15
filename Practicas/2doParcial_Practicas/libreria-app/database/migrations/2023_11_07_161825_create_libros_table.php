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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',100);
            $table->unsignedBigInteger('editorial_id')->nullable();
            $table->integer('edicion');
            $table->string('pais',50);
            $table->integer('precio');
            $table->timestamps();
            $table->foreign('editorial_id')->references('id')->on('editorial')->name('fk_editorial');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
