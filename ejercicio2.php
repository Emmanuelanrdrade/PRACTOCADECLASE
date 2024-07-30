<?php
$cliente="juean perez";

//saber el tama;o de la cadena 
print(strlen($cliente));
echo "<br>";
var_dump($cliente);
// te muestra que tipo de dato es y cuanto de tamano tiene 
// para limpiar los espacios en blanco

$texto="  juan perez ";
var_dump($texto);
$texto2=strlen(trim($texto));
echo $texto2. "<br>";

// convertir mayusculas y minusculas 

echo (strtolower($cliente));
echo "<br>";
echo (strtoupper($texto2));

var_dump(strtolower($cliente==$texto)===strtolower($texto2));

// remplazar 

echo "<br>";
echo str_replace("juan","jose",$cliente);

//buscar posicion de una tarea 

echo strpos($cliente,"perez");

//buscar segun la posicion

echo substr_count($cliente,"e");

//dividir una cadena 

$cadena=explode("e",$texto);
var_dump($cadena);
//unir una cadena 
echo "<br>";
$cadena=implode("e",$cadena);
var_dump($cadena);

?>