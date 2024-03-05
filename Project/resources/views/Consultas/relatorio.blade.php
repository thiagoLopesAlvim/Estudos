@extends("layouts.app")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="scriptperfil.js"></script>

</head>
@vite('resources/css/app.css')
<body onload="carregar()">
    <Header>
    </Header>
  
</div>
    <section>
    <div class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">Portifolio Thiago Alvim</h2>
        <p class="text-gray-700">
        <div>
        <img src="{{ asset('img/perfil.jpg')}}" alt="Descrição da Imagem" class="w-60 h-38 rounded-lg shadow-md" id="imagem">
        </div>
        <div>
        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="https://github.com/thiagoLopesAlvim" target="_blank">GitHub</a>
        </div>
        <div>
        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="https://www.linkedin.com/in/thiago-alvim-31a3631b7/" target="_blank">Linkedin</a>
        </div>
        <div>
        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="https://www.instagram.com/thiago_lalvim?igsh=NTdseHNkMnRqMnl1&utm_source=qr" target="_blank">Instagram</a>
        </div>
        </p>
        </div>
    </section>
   
</body>
</html>