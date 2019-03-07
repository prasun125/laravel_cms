<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="grey-overlay min-width-100 width-100 max-width-100 pos-absolute display-none"></div>
        @include('includes.header')
        @yield('content')
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}" type="text/javascript" rel="script"></script>
        <script src="{{ asset('assets/js/script.js') }}" type="text/javascript" rel="script"></script>
    </body>
</html>
