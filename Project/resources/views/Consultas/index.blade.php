@extends("layouts.app")
@extends('layouts.header')
@section('tittle','Consultas')


@section('header')
<h1 class="text-3xl font-bold bg-white-300 p-4">Listagem das Consultas</h1>
@endsection

@section('content')
<div class="mb-4 pt-4">
<a href="{{route('consultas.create')}}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 mb-4 pt-4">Criar Consulta</a>
</div>
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
            <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>        
        <th scope="col" class="px-6 py-3">
            Nome Cliente
        </th>
        <th scope="col" class="px-6 py-3">
            Tipo de Consulta
        </th>
        <th scope="col" class="px-6 py-3">
            Status
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
            Observação
        </th>
        <th scope="col" class="px-6 py-3">
            Tipo de Pagamento
        </th>
        <th scope="col" class="px-6 py-3">Data de Nascimento

        </th>
        <th scope="col" class="px-6 py-3">Data e Hora da consulta

        </th>
        <th></th>
        </tr>
        </thead>
    </thead>
     <tbody>

        @foreach($consultas->items() as $consulta)

            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                        <td scope="row" class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->nomecliente}}</td>
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->tipconsulta}}</td>
                        @if($consulta->status == "a")
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Open</td>
                        @endif
                        @if($consulta->status == "p")
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Pendent</td>
                        @endif
                        @if($consulta->status == "c")
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Closed</td>
                        @endif
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->telefone}}</td>
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->CPF}}</td>
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->endereco}}</td>
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->observacao}}</td>
                        @if($consulta->tippagamento == "d")
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Débito</td>
                        @endif
                        @if($consulta->tippagamento == "c")
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Credito</td>
                        @endif
                        @if($consulta->tippagamento == "p")
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Pix</td>
                        @endif
                        @if($consulta->tippagamento == "e")
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Dinheiro</td>
                        @endif
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->dtnascimento}}</td>
                        <td class="border border-gray-300 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$consulta->dtconsulta}}</td>
                        <td class="flex items-center px-6 py-4">
                            <a href="{{route('consultas.show',$consulta->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalhes</a>
                            <a href="{{route('consultas.edit',$consulta->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
            </tr>
        @endforeach
     </tbody>
</table>
<x-pagination :paginator="$consultas" />
</form>
<div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
  <span class="font-medium">Lembrete!</span> Quando o cliente realizar o pagamento o capo Status deverá ser alterado para "c" para que seja reconhecido como pago.
</div>
       
@endsection


