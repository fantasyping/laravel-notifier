<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        <header class="row">
            @include('includes.header')
        </header>

        <div id="main" class="row">

                @yield('content')

        </div>

        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>