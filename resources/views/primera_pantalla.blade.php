<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!-- Enlace para redirigir a la segunda pantalla y pasar el ID del curso -->
<a href="{{ route('segunda_pantalla', ['courseId' => $courseId]) }}">Ir a la segunda pantalla</a>
</body>
</html>