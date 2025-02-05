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
        Schema::table('artigos', function (Blueprint $table) {
            $table->json('botoes')->nullable()->after('logo'); // Adicionando botoes como JSON
            $table->date('data')->nullable()->after('botoes'); // Mudando data para formato de data
            $table->json('relacionados')->nullable()->after('conteudo'); // Adicionando relacionados
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('artigos', function (Blueprint $table) {
            $table->dropColumn(['botoes', 'data', 'relacionados']);
        });
    }
};
