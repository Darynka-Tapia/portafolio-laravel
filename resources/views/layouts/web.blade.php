<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header classs="shadow-lg">
        <div class="bg-blue-900 py-1"></div>
        <nav class="bg-blue-900 py-2">
            <a href="{{route('home')}}">
                <img 
                src="{{asset('images/logoDary.png')}}" 
                class="h-8 mx-auto">
            </a>
        </nav>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>
    <footer class="py-4 text-center">
        @auth
            <a href="{{url('dashboard')}}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{url('login')}}" class="text-sm text-gray-700 underline">Login</a>
            <a href="{{url('register')}}" class="text-sm ml-4 text-gray-700 underline">Registrate</a>

        @endif

    </footer>
</body>
</html>