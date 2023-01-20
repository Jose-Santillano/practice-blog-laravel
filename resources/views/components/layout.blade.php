<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Blog de José</title>

    <!-- CSS/SASS y JS desde Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    @include('layout.navbar')

    {{ $slot }}

    @include('layout.footer')
</body>
</html>