<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Primeiro, garantir que os dados existentes sejam compatíveis com JSON
        DB::statement("UPDATE artigos SET conteudo = '[]' WHERE conteudo IS NULL OR conteudo = ''");
        DB::statement("UPDATE artigos SET Tags = '[]' WHERE tags IS NULL OR tags = ''");

        // Alterar os tipos das colunas explicitamente usando SQL puro
        DB::statement("ALTER TABLE artigos ALTER COLUMN conteudo TYPE JSON USING conteudo::json");
        DB::statement("ALTER TABLE artigos ALTER COLUMN tags TYPE JSON USING tags::json");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverter as colunas para string, se necessário
        DB::statement("ALTER TABLE artigos ALTER COLUMN conteudo TYPE TEXT USING conteudo::TEXT");
        DB::statement("ALTER TABLE artigos ALTER COLUMN tags TYPE TEXT USING tags::TEXT");
    }
};
