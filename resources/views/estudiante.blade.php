<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <table class="table table-responsive table-striped">
    <thead>
        <h1>Lista de Estudiantes:</h1>
  <tr>
    <th>AlumnoId</th>
    <th>Nombre</th>
    <th>Rut_Alumno</th>
    <th>Dv-Alumno</th>
    <th>Telefono</th>
    <th>Mail</th> 
    <th>Fecha Activacion</th>  
    <th>Fecha Termino</th> 
    <th>CursoId</th>                      
  </tr>
</thead>

<tbody>
    @foreach ($registros as $registro)
    <tr>
    <td>{{ $registro->StudentId }}</td>
    <td>{{ $registro->StudentName }}</td>
    <td>{{ $registro->StudentRut }}</td>
    <td>{{ $registro->StudentDV }}</td>
    <td>{{ $registro->StudentPhone }}</td>
    <td>{{ $registro->StudentMail }}</td>
    <td>{{ $registro->StudentActivationDate }}</td>
    <td>{{ $registro->FechaTermino }}</td>
    <td>{{ $registro->CourseId }}</td>
    </tr>
@endforeach

   </tbody>
</table>
</body>
</html>