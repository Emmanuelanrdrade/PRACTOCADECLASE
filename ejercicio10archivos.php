
<?php
// para crear un archiv si este no existe 
$archivos="pruebas.txt";
echo(touch($archivos))?"archivo existente":"archivo no existente";

//para abrir el archivo 
//var_dump($datos);

if (touch($archivos)) {
    $datos=fopen($archivos,"w");
    fwrite($datos,"hoy es dia lunes\n");
    fwrite($datos,"hoy es dia lunes de clases \n");
    fclose($archivos);
    $datos=fopen($archivos,"r");
    while (!feof($datos)) {
        $linea=fgetc($datos,1024);
        echo $linea ."<br>";
    }
}
//fclose($archivos);
else {
    fclose($datos);
}
?>