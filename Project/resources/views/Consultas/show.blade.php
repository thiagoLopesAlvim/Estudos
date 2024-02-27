<h1>Detalhes da Dúvida {{ $consulta->id}}</h1>

<ul>
                <li>Nome do Cliente:{{$consulta->nomecliente}}</li>
                <li>Tipo da Consulta: {{$consulta->tipconsulta}}</li>
                <li>Status :{{$consulta->status}}</li>
                <li>Telfone :{{$consulta->telfone}}</li>
                <li>CPF :{{$consulta->CPF}}</li>
                <li>Endereço :{{$consulta->endereco}}</li>
                <li>Observação :{{$consulta->observacao}}</li>
                <li>Tipo de Pagamento :{{$consulta->tippagamento}}</li>dtnascimento
                <li>Data de Nascimento :{{$consulta->dtnascimento}}</li>
    <td>
        <a href="{{route('consultas.index')}}">Voltar a Todas as Consultas</a>
    </td>
</ul>

<form action="{{route('consultas.destroy',$consulta->id)}}" method="post">
    <input type="hidden" value="{{csrf_token()}}" name="_token"> 
    <button type="submit">Deletar</button>
    <input type="hidden" value="DELETE" name="_method">
</form>

