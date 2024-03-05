@extends("layouts.app")
<h1 class="text-3xl font-bold bg-white-300 p-4">Nova Consulta</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$$error}}
        <td></td>
    @endforeach
@endif

<form method="GET" action="{{route('consultas.index')}}">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="pb-4 bg-white dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class=" relative mt-1">
                        <div class="border border-gray-300 absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="search" name="search" class="border border-gray-300 block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Procure pelo nome do cliente">
                    </div>
</form>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr> 
        <th></th>      
        <th scope="col" class="px-6 py-3">
            Nome Cliente
        </th>
        <th scope="col" class="px-6 py-3">
            Telefone
        </th>
        <th scope="col" class="px-6 py-3">
            CPF
        </th>
        <th scope="col" class="px-6 py-3">
            Endereço
        </th>
        <th scope="col" class="px-6 py-3">
            Data de nascimento
        </th>
        <th></th>
        </tr>
        </thead>
    </thead>
     <tbody>

        @foreach($consultas->items() as $consulta)

            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="w-4 p-4">
                    </td>
                        <td scope="row" class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->nomecliente}}</td>
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->telefone}}</td>
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->CPF}}</td>
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->endereco}}</td>
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->dtnascimento}}</td>
    
            </tr>
        @endforeach
     </tbody>
</table>
<x-pagination :paginator="$consultas" />


<form class="grid gap-6 mb-6 md:grid-cols-2" action ="{{route('consultas.store')}}" method="post" enctype="multipart/form-data">
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
    <div class="flex items-center mb-4 pt-4">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exame:</label>  
    <input type="file" id="pathImg" name="pathImg" class="from-control-file">
    </div>
    <div>
    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Enviar</button>     
    </div>
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

