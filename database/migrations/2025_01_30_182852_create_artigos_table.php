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
            $table->string('conteudo', 5000);
            $table->string('autor', 100);
            $table->string('Categoria', 100);
            $table->string('Tags', 100);
            $table->boolean('status')->default(true);
            $table->timestamps();//registro de quando foi alterado ou criado (podemos utilizar na validação da última alteração do artigo)
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
