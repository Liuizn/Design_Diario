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
        Schema::table('increase_column_sizes', function (Blueprint $table) {
            Schema::table('posts', function (Blueprint $table) {
                $table->longText('conteudo')->change(); // Muda o campo para longText
                $table->longText('imagem')->change(); // Permite caminhos maiores
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('conteudo')->change(); // Volta para text
            $table->string('imagem', 255)->change(); // Volta para string
        });
    }
};
