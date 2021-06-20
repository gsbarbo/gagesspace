<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gage's Space -- Web Developer</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    <script src="https://kit.fontawesome.com/0bcda0788a.js" crossorigin="anonymous"></script>

    @livewireStyles

    @yield('styles')
</head>

<body class="antialiased bg-primary">

    @include('_inc.public.navbar')

    @include('_inc.alerts')

    <main class="content">
        @yield('content')
    </main>

    @include('_inc.public.footer')

    @livewireScripts

    @yield('scripts')

</body>

</html>
