
@extends("layouts.app")
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form class="border-4 border-blue-800 rounded-lg max-w-sm mx-auto" action="{{route('login.store')}}" method="post">
            <h1 class="text-3xl font-bold bg-white-300 p-4">Realize seu login para utilizar o sistema</h1>
        <br>
        <input type="hidden" value="{{csrf_token()}}" name="_token"> 
        <div class="mb-5 ml-4 pl-4 mr-4">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seu email</label>
            <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
        </div>
        <div class="mb-5 ml-4 pl-4 mr-4">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sua senha</label>
            <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        
  
        </div>
        <button type="submit" class="ml-4 pl-4 mr-4  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
        <div>
            <br>
        </div>    
    </form>

        @if($errors->any())
            @foreach($errors->all() as $error)
                {{$$error}}
                <td></td>
            @endforeach
        @endif


