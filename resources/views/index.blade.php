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
        <h1>Lista de Cursos:</h1>
        <tr>
                      <th>Curso_id</th>
                      <th>Name</th>
                      <th>Code</th>
                      <th>StarDate</th>
                      <th>EndDate</th>
                      <th>Acciones</th>                       
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->fullname }}</td>
                      <td>{{ $item->idnumber }}</td> 
                      <td>{{ $item->startdate }}</td> 
                      <td>{{ $item->enddate }}</td>
                      <td><a href="{{route('estudiante')}}">Vista Estudiantes</a></td>             
                    </tr>  
                     @endforeach                           
    </tbody>
</table>
</body>
</html>