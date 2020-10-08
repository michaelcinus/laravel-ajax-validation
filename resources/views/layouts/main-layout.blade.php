<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/app.js')}}"></script>
    <title>API</title>
</head>
<body>
    <div class="container">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
</body>
</html>