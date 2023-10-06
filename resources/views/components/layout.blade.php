<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>{{$title}} -Controle de Séries</title>
</head>
<body>
    <div class="w-screen h-screen flex flex-col justify-center items-center">

    
    <h1 class="text-5xl font-bold mb-5">{{$title}}</h1>

    {{ $slot }}
    

    </div>
    
    
    
</body>
</html>