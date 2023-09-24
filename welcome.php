<?php
session_start();
if ($_SESSION['logueado'])
{
echo "Bienvenido/a ".$_SESSION['username'];
echo "<br>";
echo "hora de conexion ".$_SESSION['time'];
echo "<br>";
echo "<br>";

?>