<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Film</h1>
    <ul>
        @foreach ($movies as $movie)
        <li><a href="">{{$movie->title}}</a> - ({{$movie->original_title}})
        <br>
        nazionalità: {{$movie->nationality}} - data: {{$movie->date}}
        <br>
        vote: {{$movie->vote}}
        </li>
        @endforeach
    </ul>
</body>
</html>