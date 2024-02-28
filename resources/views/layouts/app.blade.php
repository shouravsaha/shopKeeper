<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.header')
    </head>
    <body class="sb-nav-fixed">
        @include('layouts.navbar')

        <div id="layoutSidenav">

            @include('layouts.sidebar')

            <div id="layoutSidenav_content">
            {{-- @include('layouts.index') --}}
            @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
