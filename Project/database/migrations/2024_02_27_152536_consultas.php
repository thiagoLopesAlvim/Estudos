<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ConsultaStatus;

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
        $table->enum('status', array_column(ConsultaStatus::cases(),'name'));
        $table->string("nomecliente");
        $table->string("telefone");
        $table->string("CPF");
        $table->string("endereco");
        $table->text('observacao');
        $table->enum("tippagamento",['d','c','p','e']);
        $table->string('dtnascimento');
        $table->string('dtconsulta');
        $table->string('pathImg');
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
