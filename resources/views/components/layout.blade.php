<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>{{$title}} -To-do</title>
</head>
<body>
    <div class="w-screen h-screen flex flex-col justify-center items-center bg-zinc-200">

    <div class="bg-zinc-50 p-20 rounded-md shadow-xl my-5 flex flex-col justify-center items-center">
    <h1 class="text-5xl font-bold my-5">{{$title}}</h1>

    {{ $slot }}

    </div>
   

    </div>
    
    
    
</body>
</html>