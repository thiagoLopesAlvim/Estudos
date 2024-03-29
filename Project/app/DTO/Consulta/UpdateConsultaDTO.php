<?php

namespace App\DTO\Consulta;
use App\Http\Requests\StoreConsultaRequest;

class UpdateConsultaDTO{

public function __construct(public string $id,public string $tipconsulta,public string $status,
public string $nomecliente,public string $telefone,public string $CPF,
public string $endereco, public string $observacao, public string $tippagamento,public string $dtnascimento,public string $dtconsulta, public  $pathImg){
}

public static function makeFromRequest(StoreConsultaRequest $request, string $path){
    return new self($request->id,$request->tipconsulta, 'a', $request->nomecliente, $request->telefone,$request->CPF,
    $request->endereco,$request->observacao,$request->tippagamento,$request->dtnascimento, $request->dtconsulta, $path);
}
}