<?php 
// validaciones de archivo 

$carpeta="practicando/";
$archivo="ej.php";
echo (file_exists($carpeta.$archivo))?"archivo existente":"archivo no encontrado"."<br>";
echo (is_file($archivo))?"archivo encontrado":"archivo no encontrado"."<br>";
echo (is_dir($carpeta))?"carpeta existente":"carpeta no encontrada"."<br>";

$archivo2="n.png";
if (file_exists($carpeta.$archivo2)) {
        $size= filesize($carpeta.$archivo2);
        $creado= filectime($carpeta.$archivo2);
        $creado_fecha=date('d/m/Y H:i:s',$creado);
        $modificado= filemtime($carpeta.$archivo2);
        $modificado_fecha=date('d/m/Y H:i:s',$modificado);

        $kb=$size/1024;
        $mb=$size/1024/1024;
        $gb=$size/1024/1024/1024;

        echo "<br>"."tamano del archivo". $mb ."MB"."<br>";
        echo "creado". $creado_fecha ."<br>";
        echo "modificado".$modificado_fecha ;
}
else {
    echo "el archivo no existe";
}
?>