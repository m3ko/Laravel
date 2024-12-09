<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notes</h1>
    <ul>
    @foreach($notas as $nota)

        <li>{{$nota -> title}} -- {{$nota->description}}</li>
    
    @endforeach
        

    </ul>
</body>
</html>