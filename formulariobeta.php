<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos del Formulario</title>

</head>
<body>

<?php
if (isset($_GET["nombre"]) && isset($_GET["expediente"]) && isset($_GET["foto"])) {
  $nombre = htmlspecialchars($_GET["nombre"]);
  $expediente = htmlspecialchars($_GET["expediente"]);
  $foto = htmlspecialchars($_GET["foto"]);


  $expedientePath = $expediente;
  $fotoPath = $foto;

  echo "<h1>Datos del Formulario</h1><br>";
  echo "<p>Nombre: $nombre</p><br>";


  if (file_exists($expedientePath)) {
    echo "<p>Expediente: <a href='$expedientePath' target='_blank'>Ver PDF</a></p><br>";
  } else {
    echo "<p>Expediente: No disponible</p><br>";
  }

  if (file_exists($fotoPath)) {
    echo "<p>Foto:</p>";
    echo "<img src='$fotoPath' alt='Foto' style='max-width: 200px;'><br>";
  } else {
    echo "<p>Foto: No disponible</p><br>";
  }

} else {
  echo "<p>No se han recibido datos.</p><br>";
}
?>

</body>
</html>