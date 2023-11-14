<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cumple - WOM 💟</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
        <header class="bg-gray-900">
            <div class="container mx-auto py-4 flex intems-center justify-between">
                <img src="{{ asset('images/logo-wom-agency.png') }}" class="max-w-xs" alt="">
                <h1 class="text-2xl text-white leading-loose">Cumpleaños WOM</h1>
            </div>
        </header>
        <main class="container mx-auto">
            @yield('content')
        </main>
        <footer>

        </footer>
    </div>
</body>
</html>