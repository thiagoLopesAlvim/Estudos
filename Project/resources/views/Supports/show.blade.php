<h1>Detalhes da Dúvida {{ $support->id}}</h1>

<ul>
    <li>  Assunto:{{$support->subject}}</li>
    <li>  Status:{{$support->status}}</li>
    <li>  Descrição:{{$support->body}}</li>
    <td>
        <a href="{{route('supports.index')}}">Voltar a Todas as Dúvidas</a>
    </td>
</ul>

<form action="{{route('supports.destroy',$support->id)}}" method="post">
    <input type="hidden" value="{{csrf_token()}}" name="_token"> 
    <button type="submit">Deletar</button>
    <input type="hidden" value="DELETE" name="_method">
</form>

