<?php
  if (isset($_POST['bandera'])) {
    $archivo=$_FILES['archivo']['name'];
    $archivo=$_FILES['archivo']['type'];
    $archivo=$_FILES['archivo']['size'];
    $foto=$_FILES['foto']['name'];
    $foto=$_FILES['foto']['type'];
    $foto=$_FILES['foto']['size'];

    $mb=$size/1024/1024;
    $mb2=$type/1024/1024;

    echo "nombre de la foto:".$_FILES['foto']['name']."<br>";
    echo "Type:".$_FILES['foto']['type']."<br>";
    echo "Size:".$_FILES['foto']['size']."<br>";
    echo "Temp name:".$_FILES['foto']['tmp_name']."<br>";
    echo "Error:".$_FILES['foto']['error']."<br>";
    echo "nombre de l archivo:".$_FILES['file']['name']."<br>";
    echo "Type:".$_FILES['file']['type']."<br>";
    echo "Size:".$_FILES['file']['size']."<br>";
    echo "Temp name:".$_FILES['file']['tmp_name']."<br>";
    echo "Error:".$_FILES['file']['error']."<br>"."<br>";
  
    $archivo2=$_FILES['foto']['name'];
            if (file_exists($archivo2)) {
                    $size= filesize($$archivo2);
                    $creado= filectime($archivo2);
                    $creado_fecha=date('d/m/Y H:i:s',$creado);
                    $modificado= filemtime($archivo2);
                    $modificado_fecha=date('d/m/Y H:i:s',$modificado);

                    $mb=$size/1024/1024;

                echo ($mb<3072)?"archivo correcto":"el archivo debe de ser menor a 2 megas";
                
            }
            else {
                echo "el archivo no existe";
            }
            $archivo3=$_FILES['archivo']['name'];
            if (file_exists($archivo3)) {
                    $size= filesize($$archivo3);
                    $creado= filectime($archivo3);
                    $creado_fecha=date('d/m/Y H:i:s',$creado);
                    $modificado= filemtime($archivo3);
                    $modificado_fecha=date('d/m/Y H:i:s',$modificado);

                    $mb=$size/1024/1024;

                echo ($mb<3072)?"archivo correcto":"el archivo debe de ser menor a 10 megas";
                
            }
            else {
                echo "el archivo no existe";
            }

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
    <h1>Expediente </h1>
    <form method="post" action="" enctype="multipart/form-data">
    <label for="producto">ingrese su nombre:</label> <br>
        <input type="text"  name="nombre" required>
        <br>
        <label for="producto">seleccione su foto:</label> <br>
        <input type="file"  name="foto" required>
        <br>
        <label for="producto">seleccione archivo pdf:</label> <br>
        <input type="file"  name="file" required>
        <br>
        <input type="hidden" name="bandera" >
        <input type="submit" value="enviar">
        
       
    </form>
</body>
</html>