<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Subida</title>

</head>
<body>

<?php
$nombre = $expediente = $foto = "";
$nombreError = $expedienteError = $fotoError = "";

if (isset($_POST["submit"])) {
  $nombre = htmlspecialchars($_POST["nombre"]);

  $expediente = $_FILES["expediente"];
  $foto = $_FILES["foto"];

  $errores = false;

  if (empty($nombre)) {
    $nombreError = "El nombre es obligatorio.";
    $errores = true;
  }

  if ($expediente["type"] != "application/pdf") {
    $expedienteError = "El expediente debe ser un archivo PDF.";
    $errores = true;
  }
  if ($expediente["size"] > 10 * 1024 * 1024) {
    $expedienteError = "El expediente no debe superar los 10MB.";
    $errores = true;
  }

  if ($foto["type"] != "image/png") {
    $fotoError = "La foto debe ser un archivo PNG.";
    $errores = true;
  }
  if ($foto["size"] > 2 * 1024 * 1024) {
    $fotoError = "La foto no debe superar los 2MB.";
    $errores = true;
  }

  if (!$errores) {
    $expedientePath = urlencode($expediente["name"]);
    $fotoPath = urlencode($foto["name"]);

    header("Location: formulariobeta.php?nombre=$nombre&expediente=$expedientePath&foto=$fotoPath");
    exit;
  }
}
?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
    <p class="error"><?php echo $nombreError; ?></p>
  </div>
  <div class="form-group">
    <label for="expediente">Expediente</label>
    <input type="file" id="expediente" name="expediente" accept=".pdf">
    <p class="error"><?php echo $expedienteError; ?></p>
  </div>
  <div class="form-group">
    <label for="foto">Foto</label>
    <input type="file" id="foto" name="foto" accept=".png">
    <p class="error"><?php echo $fotoError; ?></p>
  </div>
  <div>
    <input type="submit" name="submit" value="Enviar">
  </div>
</form>

</body>
</html>