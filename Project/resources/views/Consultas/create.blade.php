@extends("layouts.app")
<h1 class="text-3xl font-bold bg-white-300 p-4">Nova Consulta</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$$error}}
        <td></td>
    @endforeach
@endif

<form action ="{{route('consultas.store')}}" method="post">
<input type="hidden" value="{{csrf_token()}}" name="_token"> 
    <div class="flex items-center">
    <label for="nome" class="mr-2 font-bold">Tipo da Consulta:</label>
    <input class="border rounded-md px-2 py-1" type="text" placeholder="Tipo Consulta" name="tipconsulta" value="{{$consulta->tipconsulta ?? old('tipconsulta')}}">
    </div>
     
    <div class="flex items-center mb-4 pt-4">
    <label for="nome" class="mr-2 font-bold">Tipo da Consulta:</label>
        <input class="border rounded-md px-2 py-1"  type="text" placeholder="Nome do cliente" name="nomecliente"value="{{$consulta->nomecliente ?? old('nomecliente')}}">
    </div>    
        <input type="text" placeholder="Telefone" name="telefone"value="{{$consulta->telefone ?? old('telefone')}}">
        <input type="text" placeholder="CPF" name="CPF"value="{{$consulta->CPF ?? old('CPF')}}">
        <input type="text" placeholder="Endereço" name="endereco"value="{{$consulta->endereco ?? old('endereco')}}">
        <input type="text" placeholder="Tipo de pagamento" name="tippagamento"value="{{$consulta->tippagamento ?? old('tippagamento')}}">
        <input type="text" placeholder="Data de Nascimento" name="dtnascimento"value="{{$consulta->dtnascimento ?? old('dtnascimento')}}">
        <input type="text" name="is_admin" value="1">
        <textarea name="observacao" cols="30" rows="5" placeholder="Observação">{{$consulta->observacao ?? old('observacao')}}</textarea>
        <button type="submit">Enviar</button>
        
</form>