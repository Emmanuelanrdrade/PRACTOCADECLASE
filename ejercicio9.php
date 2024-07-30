<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $validacion = [];
  $campos_llenos = 0;

 // if (isset($_POST['submit'])){
      $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : '';
      $apellido = isset($_POST["apellido"]) ? trim($_POST["apellido"]) : '';
      $correo = isset($_POST["correo"]) ? $_POST["correo"] : '';
      $comentario = isset($_POST["comentario"]) ? $_POST["comentario"] : '';
      $idioma = isset($_POST["idioma"]) ? $_POST["idioma"] : '';
      $musica = isset($_POST["musica"]) ? $_POST["musica"] : '';
      $pasatiempo = isset($_POST["pasatiempo"]) ? $_POST["pasatiempo"] : [];
 // }


  if (empty($nombre)) {
    $validacion[] = "El nombre es obligatorio.";
  } elseif (strlen($nombre) < 3 || strlen($nombre) > 20) {
    $validacion[] = "El nombre debe tener entre 3 y 20 caracteres.";
  } else {
    $campos_llenos++;
  }

  if (empty($apellido)) {
    $validacion[] = "El apellido es obligatorio.";
  } elseif (strlen($apellido) < 3 || strlen($apellido) > 20) {
    $validacion[] = "El apellido debe tener entre 3 y 20 caracteres.";
  } else {
    $campos_llenos++;
  }

  if (empty($correo)) {
    $validacion[] = "El correo es obligatorio.";
  } else {
    $campos_llenos++;
  }

  if (empty($comentario)) {
    $validacion[] = "El comentario es obligatorio.";
  } elseif (strlen($comentario) < 5 || strlen($comentario) > 50) {
    $validacion[] = "El comentario debe tener entre 5 y 50 caracteres.";
  } elseif (preg_match('/[@*+]/', $comentario)) {
    $validacion[] = "El comentario no debe contener *, @, +.";
  } else {
    $campos_llenos++;
  }

  if (empty($idioma) || $idioma == "Seleccione el idioma") {
    $validacion[] = "El idioma es obligatorio.";
  } else {
    $campos_llenos++;
  }

  if (empty($musica)) {
    $validacion[] = "Debe seleccionar un tipo de música.";
  } else {
    $campos_llenos++;
  }

  if (empty($pasatiempo)) {
    $validacion[] = "Debe seleccionar al menos un pasatiempo.";
  } else {
    $campos_llenos++;
  }

  if ($campos_llenos == 0) {
    echo "<p class='error'>Formulario vacío</p>";
  } elseif (empty($validacion)) {
    echo "<p style='color:green;'>¡Bienvenido, " . htmlspecialchars($nombre) . "!</p>";
    echo "<p>Apellido: " . htmlspecialchars($apellido) . "</p>";
    echo "<p>Correo: " . htmlspecialchars($correo) . "</p>";
    echo "<p>Comentario: " . htmlspecialchars($comentario) . "</p>";
    echo "<p>Idioma: " . htmlspecialchars($idioma) . "</p>";
    echo "<p>Pasatiempo: " . htmlspecialchars(implode(', ', $pasatiempo)) . "</p>";
  } else {
    echo "<div class='error'><ul>";
    foreach ($validacion as $error) {
      echo "<li style='color:red;'>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul></div>";
  }
}
?>