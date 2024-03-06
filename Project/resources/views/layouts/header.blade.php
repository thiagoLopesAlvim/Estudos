<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <img src="{{ asset('img/logosite.jpg')}}" href="{{route('welcome')}}" class=" rounded-lg shadow-md" width="80" height="200" id="imagem">
        </div>
        <div>    
            <h1 class="text-lg font-bold">Clínica Ortodôntica Especializada</h1>
        </div>
        <nav>
            <ul class="flex space-x-4">
            <li><a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 mb-4 pt-4" href="{{route('welcome')}}">Menu</a></li>
                <li><a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 mb-4 pt-4" href="{{route('consultas.day')}}">Consultas do dia</a></li>
                <li><a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 mb-4 pt-4" href="{{route('consultas.index')}}">Consultas</a></li>
                <li> <a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 mb-4 pt-4" href="{{route('consultas.attdados')}}">Att Dados</a></li>
                <li><a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 mb-4 pt-4" href="{{route('logins.index')}}">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>