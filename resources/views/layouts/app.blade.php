<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    {{-- style addon --}}
    @stack('addon-style')
    {{-- css style --}}
    @include('includes.style')

</head>

<body>
    <!-- navbar -->
    @include('includes.navbar')

    @yield('content')

    <!-- footer -->
    @include('includes.footer')

    {{-- script --}}
    @include('includes.script')

    {{-- addon script --}}
    @stack('addon-script')
</body>

</html>
