@extends("layouts.app")

<h1 class="text-3xl font-bold bg-white-300 p-4">Consulta de {{ $consulta->nomecliente }}</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$$error}}
        <td></td>
    @endforeach
@endif

<form class="grid gap-6 mb-6 md:grid-cols-2" action ="{{route('consultas.update', $consulta->id)}}" method="post" enctype="multipart/form-data">    
<input type="hidden" value="{{csrf_token()}}" name="_token"> 
    <input type="hidden" value="PUT" name="_method">
<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div class="flex items-center">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo da Consulta:</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Tipo Consulta" name="tipconsulta" value="{{$consulta->tipconsulta ?? old('tipconsulta')}}">
    </div>
    <div class="flex items-center">
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Cliente:</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Nome do cliente" name="nomecliente"value="{{$consulta->nomecliente ?? old('nomecliente')}}">
    </div>  
    <div class="flex items-center">
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status:</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Status" name="status"value="{{$consulta->status ?? old('status')}}">
    </div>
    <div class="flex items-center">
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone:</label>      
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Telefone" name="telefone"value="{{$consulta->telefone ?? old('telefone')}}">
    </div>        
    <div class="flex items-center">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF:</label>        
               <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="CPF" name="CPF"value="{{$consulta->CPF ?? old('CPF')}}">
    </div>     
    <div class="flex items-center">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço:</label>        
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Endereço" name="endereco"value="{{$consulta->endereco ?? old('endereco')}}">
    </div>           
    <div class="flex items-center">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de pagamento:</label>        
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Tipo de pagamento" name="tippagamento"value="{{$consulta->tippagamento ?? old('tippagamento')}}">
    </div>
    <div class="flex items-center">        
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de Nascimento:</label>        
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Data de Nascimento" name="dtnascimento"value="{{$consulta->dtnascimento ?? old('dtnascimento')}}">
    </div>
                <input type="hidden" name="is_admin" value="1">
    <div class="flex items-center">        
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de Nascimento:</label>        
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Data de Nascimento" name="dtconsulta"value="{{$consulta->dtconsulta ?? old('dtconsulta')}}">
    </div>
    <div class="flex items-center">        
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"">Observação:</label>   
 <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="observacao" cols="30" rows="5" placeholder="Observação">{{$consulta->observacao ?? old('observacao')}}</textarea>
    </div>
    <div class="flex items-center mb-4 pt-4">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exame:</label>  
    <input type="file" id="pathImg" name="pathImg" class="from-control-file">
    </div>
</div>
<div>
<button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Enviar</button>
</div>
</form>
<div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
  <span class="font-medium">Lembrete!</span> Quando o cliente realizar o pagamento o capo Status deverá ser alterado para "c" para que seja reconhecido como pago.
</div>

