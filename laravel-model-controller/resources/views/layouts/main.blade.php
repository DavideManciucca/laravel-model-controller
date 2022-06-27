<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <li><a href="{{route('home')}}">clicca qui per ritornare alla home</a></li>
            <li><a href="{{route('film')}}">clicca qui per i film</a></li>
            <li><a href="{{route('about')}}">Chi siamo</a></li>
            <li><a href="{{route('contatti')}}">Pagina dei contatti</a></li>
        </ul>
    </div>

    @yield('content')

</body>
</html>
