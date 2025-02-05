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
        Schema::create('artigos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 300)->unique()->nullable();
            $table->json('conteudo'); // Alterado para JSON
            $table->string('autor', 100);
            $table->string('categoria', 100); // Corrigido para manter padrão lowercase
            $table->json('tags')->nullable();            
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artigos');
    }
};
