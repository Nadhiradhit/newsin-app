<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/newspaper.png')}}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $title }}</title>
</head>
<body>
    
    @yield('container')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var toast = document.getElementById('myToast');
                toast.classList.add(
                'hidden');
            },
            3000);
        });
    </script>
    
</body>
</html>