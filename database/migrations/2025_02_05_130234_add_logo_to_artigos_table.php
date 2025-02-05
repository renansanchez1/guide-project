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
            $table->string('logo', 255)->nullable()->after('titulo'); // Adicionando a coluna logo
        });
    }
    
    public function down(): void
    {
        Schema::table('artigos', function (Blueprint $table) {
            $table->dropColumn('logo');
        });
    }
    
};
