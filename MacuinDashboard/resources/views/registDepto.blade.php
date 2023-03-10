<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macuin Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
        <h4>Registro de Departamentos"</h4>
        <form method="POST" action="{{route('depto.create')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <form label>Nombre</label>
            <input class ="form-control="Nombre" type="text"> 
            <form label>Correo</label>
            <input class="form-control"="Correo" type="text">
            <label>Departamento</label>
            <input name="Departamento" type="text">
            <label>Encargado</label>
            <input name="Encargado" type="text">
            
        </div>
        <button type="submit">Guardar</button>
    </form>
    
</body>
</html>

</body>
</html>