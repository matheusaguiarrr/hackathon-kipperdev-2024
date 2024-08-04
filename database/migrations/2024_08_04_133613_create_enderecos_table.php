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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('voluntario_id')->nullable();
            //Colocar cep como string
            $table->bigInteger("cep");
            $table->string("estado", 2);
            $table->string("cidade", 100);
            $table->string("bairro", 100);
            $table->string("rua", 100);
            $table->string("numero", 10);
            //Colocar complemento como opcional
            $table->string("complemento", 100);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('voluntario_id')->references('id')->on('voluntarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
