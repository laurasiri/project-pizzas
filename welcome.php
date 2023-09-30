<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navtop">
        <div>
        <a href="logout.php">Logout</a>
</div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php 
session_start();  //se usa para incializar una VARIABLE DE SESION y despues para ser usada
if($_SESSION['LOGUEADO']);{
echo "BIENVENIDO ".$_SESSION ["username"];
echo "<br>";
echo "HORA DE CONEXION ".$_SESSION ["time"];
echo "<br>";
echo "<br>";
$table = "<table><thead><tr><th>Id</th><th>Producto</th><th>Categoria</th><th>Precio</th><th>Fecha de Alta</th></tr></thead>";  
}
?>