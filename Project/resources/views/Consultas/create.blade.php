<h1>Nova Consulta</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$$error}}
        <td></td>
    @endforeach
@endif

<form action ="{{route('consultas.store')}}" method="post">
        @include('consultas.partials.form')
</form>