<h1>Nova Dúvida</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$$error}}
        <td></td>
    @endforeach
@endif

<form action ="{{route('supports.store')}}" method="post">
        @include('supports.partials.form')
</form>