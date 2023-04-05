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
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->string('municipio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participantes');
    }
};
