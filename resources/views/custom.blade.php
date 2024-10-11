<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>custom</title>
</head>
<body style= "background-color: rgb(176, 118, 231)">
    <h1> custom view</h1>
    <h2><?php echo $msj ?></h2>
    <h2><?= $identi?></h2>
    <h2> {{$A}} </h2>
    <h2>{{$msj}} {{$identi}} {{$A}} </h2>
    <h3><a href="/testView">test (sin nombre)</a></h3>

    <h3><a href="{{route('contact')}}">contacto (ruta con nombre)</a></h3>

</body>
</html>