<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('seo')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @stack('styles')
    <link rel="icon" href="{{ asset('tomacupom.svg') }}" type="image/svg+xml">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="preconnect" href="https://cdn.tomacupom.com.br" crossorigin>
</head>
<body class="font-sans">
     @include('components.utils.header')
    <div class="pt-28">
        <main class="font-sans">
            @yield('content')
        </main>
    </div>
    @include('components.utils.footer')
    @stack('scripts')
</body>
</html>
