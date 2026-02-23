<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 😂</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
</head>
<body>
    <header>
    <img src="{{asset('images/search.jpg')}}" alt="">
        @yield('header')
        @include('sidemenu')
    </header>
    <main>
        @yield('maincontent')
    </main>

    <footer>
        @yield('footer')
    </footer>
    {{-- <a href="{{ route("testpage") }}">Go to test page</a> --}}
</body>
</html>