<!DOCTYPE html>
<html lang="en" data-theme="mytheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/newspaper.png')}}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $title }}</title>
</head>
<body>

    <x-sidebar/>
    
    @yield('container')

    {{-- Flowbite JS --}}
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>
</html>