@extends("layouts.app")

<h1 class="text-3xl font-bold bg-white-300 p-4">Detalhes da Consulta de {{ $consulta->nomecliente}}</h1>

<ul class="list-disc ">
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Nome do Cliente:  {{$consulta->nomecliente}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Tipo da Consulta: {{$consulta->tipconsulta}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Status :{{$consulta->status}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Telefone :{{$consulta->telefone}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">CPF :{{$consulta->CPF}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Endereço :{{$consulta->endereco}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Observação :{{$consulta->observacao}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Tipo de Pagamento :{{$consulta->tippagamento}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Data de Nascimento :{{$consulta->dtnascimento}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Observação :{{$consulta->observacao}}</li>
                <li class="mb-2 font-bold border border-gray-300 border-2 p-2">Data e Hora da Consulta :{{$consulta->dtconsulta}}</li>
    <td>
        <div class="mb-4 pt-4">
        <a href="{{route('consultas.index')}}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Voltar a Todas as Consultas</a>
        <div class="mb-4 pt-4">
    </td>
</ul>

<form action="{{route('consultas.destroy',$consulta->id)}}" method="post">
    <input type="hidden" value="{{csrf_token()}}" name="_token"> 
    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Deletar</button>
    <input type="hidden" value="DELETE" name="_method">
</form>

