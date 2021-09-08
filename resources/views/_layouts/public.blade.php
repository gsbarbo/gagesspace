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

    <meta name="description"
        content="Hi! My name is Gage. I am a freelance web designer/developer. How often do you use the internet to find a business? Is your business online? I can get your website up and running quick and hassle free. Contact me today!!">

    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#0d1117" />
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">


    {{-- <script src="https://kit.fontawesome.com/0bcda0788a.js" crossorigin="anonymous"></script> --}}


    @yield('styles')
</head>

<body class="antialiased bg-primary">

    @include('_inc.public.navbar')

    @include('_inc.alerts')

    <main class="content">
        @yield('content')
    </main>

    @include('_inc.public.footer')

    @yield('scripts')

    <script src="{{ asset('sw.js') }}"></script>

    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("{{ asset('sw.js') }}").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

    <script>
        var nav = document.getElementById('site-menu');
        var header = document.getElementById('top');
        nav.classList.add('nav-sticky');
        header.classList.add('pt-scroll');
    </script>

</body>

</html>
