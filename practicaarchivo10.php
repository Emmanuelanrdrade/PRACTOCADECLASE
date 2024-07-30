<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ejercicio practica de clase 10 </title>
</head>
<body>
  <h2>Agregar datos</h2>
<form method="post" action="">
    <label for="nombre">nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="apellido">apellido:</label>
    <input type="text" id="apellido" name="apellido" required>
    <br>
    <label for="carrera">carrera:</label>
    <input type="text" id="carrera" name="carrera" required>
    <br>
    <input type="submit" name="submit" value="enviardatos">
</form>
</body>
</html>
<?php
 if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $carrera = $_POST['carrera'];
        $archivos="datos.txt";
        echo(touch($archivos))?"archivo existente":"archivo no existente";
        if (touch($archivos)) {
            $datos=fopen($archivos,"w");
            fwrite($datos,"$nombre\n");
            fwrite($datos,"$apellido \n");
            fwrite($datos,"$carrera \n");
            fclose($datos);   
        
        }         
 }

?>