<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vu Shop</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        #app {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <div id="app">
        {{-- Header Navbar --}}
        <header class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0px -5px 40px -15px rgba(0,0,0,0.7);">
            @include('component-web.header')
        </header>

        <main class="pb-5" style="background-color: #e2eaef">

            @switch(true)
                @case(request()->is('/') || request()->is('search*'))
                    {{-- Banner slide --}}
                    @include('component-web.banner-slide')
                    {{-- Product --}}
                    <div class="container">
                        @include('web.product')
                    </div>
                @break

                @case(request()->is('contact'))
                    <div class="container">
                        @include('web.contact')
                    </div>
                @break

                @case(request()->is('category/*'))
                    {{-- Banner slide --}}
                    @include('component-web.banner-slide')
                    {{-- Product --}}
                    <div class="container">
                        @include('web.product-category')
                    </div>
                @break

                @case(request()->is('product-detail/*'))
                    {{-- Main --}}
                    <main class="container my-4">
                        @include('web.product-detail')
                    </main>
                @break
            @endswitch
        </main>

        {{-- Footer --}}
        <footer class="border-top" style="box-shadow: 0px 5px 40px -15px rgba(0,0,0,0.7);">
            @include('component-web.footer')
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
