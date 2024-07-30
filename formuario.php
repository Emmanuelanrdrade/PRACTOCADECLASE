<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Validación</title>
  <link rel="stylesheet" href="formulario2.css">
</head>
<body>

<div class="container">
<?php
  $validacion = [];

  if (isset($_POST["submit"])) {
    $campos_llenos = 0;

    $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : '';
    $apellido = isset($_POST["apellido"]) ? trim($_POST["apellido"]) : '';
    $correo = isset($_POST["correo"]) ? $_POST["correo"] : '';
    $comentario = isset($_POST["comentario"]) ? $_POST["comentario"] : '';
    $idioma = isset($_POST["idioma"]) ? $_POST["idioma"] : '';
    $musica = isset($_POST["musica"]) ? $_POST["musica"] : '';
    $pasatiempo = isset($_POST["pasatiempo"]) ? $_POST["pasatiempo"] : [];

    if (empty($nombre)) {
      $validacion[0] = "El nombre es obligatorio.";
    } elseif (strlen($nombre) < 3 || strlen($nombre) > 20) {
      $validacion[0] = "El nombre debe tener entre 3 y 20 caracteres.";
    } else {
      $campos_llenos++;
    }

    if (empty($apellido)) {
      $validacion[1] = "El apellido es obligatorio.";
    } elseif (strlen($apellido) < 3 || strlen($apellido) > 20) {
      $validacion[1] = "El apellido debe tener entre 3 y 20 caracteres.";
    } else {
      $campos_llenos++;
    }

    if (empty($correo)) {
      $validacion[2] = "El correo es obligatorio.";
    } else {
      $campos_llenos++;
    }

    if (empty($comentario)) {
      $validacion[3] = "El comentario es obligatorio.";
    } elseif (strlen($comentario) < 5 || strlen($comentario) > 50) {
      $validacion[3] = "El comentario debe tener entre 5 y 50 caracteres.";
    } elseif (preg_match('/[@*+]/', $comentario)) {
      $validacion[3] = "El comentario no debe contener *, @, +.";
    } else {
      $campos_llenos++;
    }

    if (empty($idioma) || $idioma == "Seleccione el idioma") {
      $validacion[4] = "El idioma es obligatorio.";
    } else {
      $campos_llenos++;
    }

    if (empty($musica)) {
      $validacion[5] = "Debe seleccionar un tipo de música.";
    } else {
      $campos_llenos++;
    }

    if (empty($pasatiempo)) {
      $validacion[6] = "Debe seleccionar al menos un pasatiempo.";
    } else {
      $campos_llenos++;
    }

    if ($campos_llenos == 0) {
      $validacion[7] = "Formulario vacío.";
    } elseif (empty($validacion)) {
      echo "<p class='success'>¡Bienvenido, " . htmlspecialchars($nombre) . "!</p>";
      echo "<p>Apellido: " . htmlspecialchars($apellido) . "</p>";
      echo "<p>Correo: " . htmlspecialchars($correo) . "</p>";
      echo "<p>Comentario: " . htmlspecialchars($comentario) . "</p>";
      echo "<p>Idioma: " . htmlspecialchars($idioma) . "</p>";
      echo "<p>Pasatiempo: " . htmlspecialchars(implode(', ', $pasatiempo)) . "</p>";
    }
  }

  $idiomas = [
    'es' => 'Español',
    'in' => 'Inglés',
    'ay' => 'Aymara',
    'port' => 'Portugués',
    'al'=>'aleman'
  ];

  $musicas = [
    'rock' => 'Rock',
    'clasico' => 'Clásico'
  ];

  $pasatiempos = [
    'jugar' => 'Jugar',
    'cantar' => 'Cantar',
    'estudiar' => 'Estudiar'
  ];
?>

  <form action="" method="post">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <div class="<?php echo isset($validacion[0]) ? 'input-error2' : ''; ?>">
        <input type="text" id="nombre" name="nombre" value="<?php echo isset($nombre) ? htmlspecialchars($nombre) : ''; ?>" >
      </div>
      <p class="error"><?php echo isset($validacion[0]) ? $validacion[0] : ''; ?></p>
    </div>

    <div class="form-group">
      <label for="apellido">Apellido</label>
      <div class="<?php echo isset($validacion[1]) ? 'input-error2' : ''; ?>">
        <input type="text" id="apellido" name="apellido" value="<?php echo isset($apellido) ? htmlspecialchars($apellido) : ''; ?>" class="<?php echo isset($validacion[1]) ? 'input-error' : ''; ?>">
      </div>
      <p class="error"><?php echo isset($validacion[1]) ? $validacion[1] : ''; ?></p>
    </div>

    <div class="form-group">
      <label for="correo">Correo</label>
      <div class="<?php echo isset($validacion[2]) ? "input-error2" : ""; ?>">
        <input type="email" id="correo" name="correo" value="<?php echo isset($correo) ? htmlspecialchars($correo) : ''; ?>" class="<?php echo isset($validacion[2]) ? 'input-error' : ''; ?>">
      </div>
      <p class="error"><?php echo isset($validacion[2]) ? $validacion[2] : ''; ?></p>
    </div>

    <div class="form-group">
      <label for="comentario">Comentario</label>
      <textarea id="comentario" name="comentario" rows="4" class="<?php echo isset($validacion[3]) ? 'input-error' : ''; ?>"><?php echo isset($comentario) ? htmlspecialchars($comentario) : ''; ?></textarea>
      <p class="error"><?php echo isset($validacion[3]) ? $validacion[3] : ''; ?></p>
    </div>

    <div class="form-group">
      <label for="idioma">Idioma</label>
      <select id="idioma" name="idioma" class="<?php echo isset($validacion[4]) ? 'input-error' : ''; ?>">
        <option value="" disabled selected>Seleccione el idioma</option>
        <?php
          foreach ($idiomas as $clave => $valor) {
            echo '<option value="' . $clave . '" ' . (isset($idioma) && $idioma == $clave ? 'selected' : '') . '>' . $valor . '</option>';
          }
        ?>
      </select>
      <p class="error"><?php echo isset($validacion[4]) ? $validacion[4] : ''; ?></p>
    </div>

    <div class="form-group">
      <p>Música</p>
      <?php
        foreach ($musicas as $clave => $valor) {
          echo '<input type="radio" id="' . $clave . '" name="musica" value="' . $clave . '" ' . (isset($musica) && $musica == $clave ? 'checked' : '') . '>';
          echo '<label for="' . $clave . '">' . $valor . '</label>';
        }
      ?>
      <p class="error"><?php echo isset($validacion[5]) ? $validacion[5] : ''; ?></p>
    </div>

    <div class="form-group">
      <p>Pasatiempos</p>
      <?php
        foreach ($pasatiempos as $clave => $valor) {
          echo '<input type="checkbox" id="' . $clave . '" name="pasatiempo[]" value="' . $clave . '" ' . (isset($pasatiempo) && in_array($clave, $pasatiempo) ? 'checked' : '') . '>';
          echo '<label for="' . $clave . '">' . $valor . '</label>';
        }
      ?>
      <p class="error"><?php echo isset($validacion[6]) ? $validacion[6] : ''; ?></p>
    </div>

    <input type="submit" name="submit" value="Enviar Formulario">
  </form>

  <p class="error"><?php echo isset($validacion[7]) ? $validacion[7] : ''; ?></p>
</div>

</body>
</html>