<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Show</title>
</head>
<body>
    <div class="container film-selected-container">
        <a href="{{route('homepage')}}"><button class="btn"><i class="fa-solid fa-house"></i></button></a>
        <div class="film-selected">
            <img class="img-style" src="{{$movie->src}}" alt="">
            <h2>{{$movie->title}} - ({{$movie->original_title}})</h2>
            <h3>nazionalità: {{$movie->nationality}} - data: {{$movie->date}}</h3>
            <h4>vote: {{$movie->vote}}</h4>

        </div>
        <div class="film-box-list">
            <h2>altri film....</h2>
            <ul>
                @foreach ($movies as $movie)
                <li class="film-list"><a href="{{route('show', $movie->id)}}">{{$movie->title}}</a> - ({{$movie->original_title}})</li>
                @endforeach
            </ul>
        </div>
    </div>
    </body>
</html>