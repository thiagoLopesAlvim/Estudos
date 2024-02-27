<h1>Consulta {{ $consulta->id }}</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$$error}}
        <td></td>
    @endforeach
@endif

<form action ="{{route('consultas.update', $consulta->id)}}" method="post">
    <input type="hidden" value="{{csrf_token()}}" name="_token"> 
    <input type="hidden" value="PUT" name="_method">
    @include('consultas.partials.form',[
        'consulta' => $consulta
        ])
</form>