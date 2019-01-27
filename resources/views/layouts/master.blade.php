<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.meta')

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div id="app">
    @include('layouts.partials.nav')

    @yield('hero')

    <div class="container mx-auto max-w-lg">

        <main>
            @yield('content')
        </main>

        @include('layouts.partials.footer')
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
