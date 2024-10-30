<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD PARCIAL2')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        @include('layout._partials.header')
        
        <main>
            @yield('content')
        </main>
        
        @include('layout._partials.footer')
    </div>
</body>
</html>
