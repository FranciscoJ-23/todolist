<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Todo List con Laravel </title>
</head>
<body>
    
    <form action="{{url('/')}}" method="post">

        <input type="text" name="task" id="task"  placeholder="Ingrese una tarea">

        <button type="button">Agregar</button>

    </form>




</body>
</html>