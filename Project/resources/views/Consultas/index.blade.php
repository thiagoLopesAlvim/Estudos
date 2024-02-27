@extends("layouts.app")

@section('tittle','Consultas')


@section('header')
<h1>Listagem das Conusltas</h1>
@endsection

@section('content')

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
                @if($consulta->status == "a")
                <td>Open</td>
                @endif
                @if($consulta->status == "p")
                <td>Pendent</td>
                @endif
                @if($consulta->status == "c")
                <td>Closed</td>
                @endif
                <td>{{$consulta->telfone}}</td>
                <td>{{$consulta->CPF}}</td>
                <td>{{$consulta->endereco}}</td>
                <td>{{$consulta->observacao}}</td>
                @if($consulta->tippagamento == "d")
                <td>Débito</td>
                @endif
                @if($consulta->tippagamento == "c")
                <td>Credito</td>
                @endif
                @if($consulta->tippagamento == "p")
                <td>Pix</td>
                @endif
                @if($consulta->tippagamento == "e")
                <td>Dinheiro</td>
                @endif
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

@endsection