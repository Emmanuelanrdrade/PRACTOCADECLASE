<?php
  if (isset($_POST['bandera'])) {
    $archivo=$_FILES['archivo']['name'];
    $archivo=$_FILES['archivo']['type'];
    $archivo=$_FILES['archivo']['size'];

    echo "filename:".$_FILES['file']['name']."<br>";
    echo "Type:".$_FILES['file']['type']."<br>";
    echo "Size:".$_FILES['file']['size']."<br>";
    echo "Temp name:".$_FILES['file']['tmp_name']."<br>";
    echo "Error:".$_FILES['file']['error']."<br>";

  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formulario de datos </h1>
    <form method="post" action="" enctype="multipart/form-data">
        <label for="producto">seleccione archivo:</label> <br>
        <input type="file"  name="file" required>
        <br> 
        <input type="hidden" name="bandera" >
        <input type="submit" value="enviar">
        
       
    </form>
</body>
</html>
