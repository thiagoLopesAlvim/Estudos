<?php

namespace App\DTO\Consulta;
use App\Http\Requests\StoreConsultaRequest;

class UpdateConsultaDTO{

public function __construct(public string $id,public string $tipconsulta,public string $status,
public string $nomecliente,public string $telfone,public string $CPF,
public string $endereco, public string $observacao, public string $tippagamento,public string $dtnascimento){
}

public static function makeFromRequest(StoreConsultaRequest $request){
    return new self($request->id,$request->tipconsulta, 'a', $request->nomecliente, $request->telefone,$request->CPF,
    $request->endereco,$request->observacao,$request->tippagamento,$request->dtnascimento);
}
}