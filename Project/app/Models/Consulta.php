<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = [
        "tipconsulta",
        "status",
        "nomecliente",
        "telfone",
        "CPF",
        "endereco",
        "observacao",
        "tippagamento",
        "dtnascimento",
    ] ;
}
