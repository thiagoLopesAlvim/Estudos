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
        Schema::create("consultas", function (Blueprint $table) {
            $table->id();
            $table->string("tipconsulta");
            $table->enum('status', ['a','p','c']);
            $table->string("nomecliente");
            $table->string("telfone");
            $table->string("CPF");
            $table->string("endereco");
            $table->text('observacao');
            $table->enum("tippagamento",['d','c','p','d']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
