<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-primi-passi</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('shop')}}">Shop</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('forum')}}">Forum</a></li>
        </ul>
    </header>

    <h1>Hello World</h1>
    <h2>{{$name}} {{$lastname}}</h2>
</body>
</html>