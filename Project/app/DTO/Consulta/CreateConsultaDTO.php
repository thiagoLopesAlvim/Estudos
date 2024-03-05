<?php 

namespace App\DTO\Consulta;
use Illuminate\http\UploadedFile;
use App\Http\Requests\StoreConsultaRequest;

class CreateConsultaDTO{

    public function __construct(public string $tipconsulta,public string $status,
    public string $nomecliente,public string $telefone,public string $CPF,
    public string $endereco, public string $observacao, public string $tippagamento,public string $dtnascimento, public string $dtconsulta, public  $pathImg){
    }

    public static function makeFromRequest(StoreConsultaRequest $request, string $path){
        return new self($request->tipconsulta, 'a', $request->nomecliente, $request->telefone,$request->CPF,
                        $request->endereco,$request->observacao,$request->tippagamento,$request->dtnascimento, $request->dtconsulta, $path);
    }
}