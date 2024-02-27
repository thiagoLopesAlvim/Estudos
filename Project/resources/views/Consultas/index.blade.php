<h1>Listagem das Conusltas</h1>

<a href="{{route('consultas.create')}}">Criar Consulta</a>

<table>
    <thead>
        <th>Nome Cliente</th>
        <th>Tipo de Consulta</th>
        <th>Status</th>
        <th>Telefone</th>
        <th>CPF</th>
        <th>Endereço</th>
        <th>Observação</th>
        <th>Tipo de Pagamento</th>
        <th>Data de Nascimento</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($consultas->items() as $consulta)
            <tr>
                <td>{{$consulta->nomecliente}}</td>
                <td>{{$consulta->tipconsulta}}</td>
                <td>{{getStatusConsulta($consulta->status)}}</td>
                <td>{{$consulta->telfone}}</td>
                <td>{{$consulta->CPF}}</td>
                <td>{{$consulta->endereco}}</td>
                <td>{{$consulta->observacao}}</td>
                <td>{{$consulta->tippagamento}}</td>
                <td>{{$consulta->dtnascimento}}</td>
                <td>
                    <a href="{{route('consultas.show',$consulta->id)}}">Detalhes</a>
                    <a href="{{route('consultas.edit',$consulta->id)}}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


    
<x-pagination :paginator="$consultas" />