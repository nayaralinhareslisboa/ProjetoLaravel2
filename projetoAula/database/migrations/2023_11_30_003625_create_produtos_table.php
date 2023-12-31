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
        Schema::create('produtos', function (Blueprint $table) { //aqui adiciona os campos que contem na tabela de produto, após isso roda o php artisa migrate para criar no banco a tabela
            $table->bigIncrements('id');
            $table->string('nome', 150);
            $table->string('tipo', 150);
            $table->decimal('preco', 8,2);
            $table->integer('quantidade');
            $table->timestamps();
        });
    }//após criar a tabela no banco, criado a controller produto

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
