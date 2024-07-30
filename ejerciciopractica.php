<!DOCTYPE html>
<html>
  <head>
    <title>ejercicio de clase </title>
  </head>
  <body>

	<?php
		
		$nombre = $_REQUEST["nombre"];
		echo "<p>$nombre</p>";
        $con = $_REQUEST["con"];
		echo "<p>$con</p>";
        $con2 = $_REQUEST["con2"];
		echo "<p>$con2</p>";

        print(strlen($nombre));
        echo "<br>";

        $longitud = strlen($nombre);
        $parte1 = substr($nombre, 0, $longitud / 3);
        $parte2 = substr($nombre, $longitud / 3, $longitud / 3); 
        $parte3 = substr($nombre, 2 * ($longitud / 3)); 

        echo "Parte 1: $parte1<br>";
        echo "Parte 2: $parte2<br>";
        echo "Parte 3: $parte3<br>";

        echo "<br>";

        echo substr_count($nombre,"m");

	?>

  </body>
</html>
