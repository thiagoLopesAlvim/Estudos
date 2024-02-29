@extends("layouts.app")
<h1 class="text-3xl font-bold bg-white-300 p-4">Nova Consulta</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$$error}}
        <td></td>
    @endforeach
@endif

<form class="grid gap-6 mb-6 md:grid-cols-2" action ="{{route('consultas.store')}}" method="post">
<input type="hidden" value="{{csrf_token()}}" name="_token"> 
<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div class="flex items-center">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo da Consulta:</label>
    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Tipo Consulta" name="tipconsulta" value="{{$consulta->tipconsulta ?? old('tipconsulta')}}">
    </div>
     
    <div class="flex items-center mb-4 pt-4">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Cliente:</label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  type="text" placeholder="Nome do cliente" name="nomecliente"value="{{$consulta->nomecliente ?? old('nomecliente')}}">
    </div> 
    <div class="flex items-center mb-4 pt-4"> 
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone:</label>  
        <input id='phone' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Telefone" id="telefone" name="telefone"value="{{$consulta->telefone ?? old('telefone')}}">
    </div>    
    <div class="flex items-center mb-4 pt-4">    
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF:</label>
    <input id="cpf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" px-2 py-1" type="text" placeholder="CPF" name="CPF"value="{{$consulta->CPF ?? old('CPF')}}">
    </div>
    <div class="flex items-center mb-4 pt-4">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço:</label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Endereço" name="endereco"value="{{$consulta->endereco ?? old('endereco')}}">
    </div>
    <div class="flex items-center mb-4 pt-4">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Pagamento:</label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Tipo de pagamento" name="tippagamento"value="{{$consulta->tippagamento ?? old('tippagamento')}}">
    </div>
    <div class="flex items-center mb-4 pt-4">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de Nascimento:</label>
        <input id='dtns' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Data de Nascimento" name="dtnascimento"value="{{$consulta->dtnascimento ?? old('dtnascimento')}}">
    </div>
    
    <div class="flex items-center mb-4 pt-4">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data e hora da Consulta:</label>
        <input id="dtct" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Data e Hora da Consulta" name="dtconsulta"value="{{$consulta->dtconsulta ?? old('dtconsulta')}}">
    </div>

    <div class="flex items-center mb-4 pt-4">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observação:</label>
        <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="observacao" cols="30" rows="5" placeholder="Observação">{{$consulta->observacao ?? old('observacao')}}</textarea>
    </div>
    
    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Enviar</button>     
     
</div>  

</form>
<div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
  <span class="font-medium">Lembrete!</span> As silgas para os tipos de pagamentos são: 
  1-'d' para Débito.
  2-'c' para Crédito.
  3- 'p' para pix.
  4- 'e' para dinheiro.
</div>

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>
        $('#dtns').mask('00/00/0000');
        $('#dtct').mask('00/00/0000 00:00:00');
        $('#phone').mask('(00) 00000-0000');
        $('#cpf').mask('000.000.000-00', { reverse: true });
        $('#money').mask("#.##0,00", { reverse: true });
    </script>

