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
    <!-- ========================================== -->
    <!-- HEADER MOBILE (Visível até telas médias)   -->
    <!-- ========================================== -->
    <div class="block lg:hidden">
        @if(request()->routeIs('home'))
            <x-utils.header-mobile tema="light" logoTopo="https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-branco.webp" />
        @else
            <x-utils.header-mobile />
        @endif
    </div>

    <!-- ========================================== -->
    <!-- HEADER DESKTOP (Visível em telas grandes)  -->
    <!-- ========================================== -->
    <div class="hidden lg:block">
        @if(request()->routeIs('home'))
            <x-utils.header tema="light" logoTopo="https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-branco.webp" />
        @else
            <x-utils.header />
        @endif
    </div>
    <main class="font-sans">@yield('content')</main>
    @include('components.utils.footer')
    @stack('scripts')
</body>
</html>
