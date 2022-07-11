<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Film</h1>
    <ul class="list-home-style">
        @foreach ($movies as $movie)
        <div class="card-film">
            <a href="{{route('show', $movie->id)}}">
            <img class="img-style" src="{{$movie->src}}" alt="">
            <li class="list-home">
            {{$movie->title}} - ({{$movie->original_title}})
            </a> 
                <div class="film-info">
                nazionalità: {{$movie->nationality}} - data: {{$movie->date}}
                <br>
                vote: {{$movie->vote}}
        
                </div>
            </li>
        </div>
        
        @endforeach
    </ul>
    </div>
    
</body>
</html>