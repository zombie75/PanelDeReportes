<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

@foreach ($registros as $registro)
    <p>{{ $registro->StudentId }} - {{ $registro->StudentName }}</p>
    <!-- Resto de los campos de estudiante -->
@endforeach
</body>
</html>