<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($tasks as $key => $task )
    <h2><a href="{{'show/'.$key}}">{{$task}}</a></h2>

    @endforeach
</body>
</html>
