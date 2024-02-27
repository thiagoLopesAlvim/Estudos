<h1>Dúvida {{ $support->id }}</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$$error}}
        <td></td>
    @endforeach
@endif

<form action ="{{route('supports.update', $support->id)}}" method="post">
    <input type="hidden" value="{{csrf_token()}}" name="_token"> 
    <input type="hidden" value="PUT" name="_method">
    @include('supports.partials.form',[
        'support' => $support
        ])
</form>