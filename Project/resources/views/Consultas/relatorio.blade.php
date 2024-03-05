@extends("layouts.app")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Teste</h2>
   <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> ITalico</label>
    @foreach($consultas->items() as $consulta)
        <td>{{$consulta->id}}</td>

    @endforeach
   
</body>
</html>