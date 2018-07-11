<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recordatorio de Actividad</title>
</head>
<body>
    <h1>{{$activity->activity}}</h1>
    <p>{{$activity->description}}</p>
    <p style="font-style: italic">{{$activity->remaining}} días restantes</p>
    <a href="http://actividades.fmontero.com.mx/home">Actividades</a>
    
</body>
</html>