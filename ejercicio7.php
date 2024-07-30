<?php
///funciones y su aplicacion 
function mostrar($mensaje){
   echo "inicio de datos";
   echo $mensaje;
}
mostrar("puede mandar nuemro o letras");

/// ejemplo dos de funciones 
/*
$producto =$_GET['nombre'];
$monto =$_GET['cantidad'];
$edad =$_GET['edad'];
$iva=$_GET['iva'];
$totaliva=0;
$totalsiniva=0;
echo "<br>";

function calcularmonto( int $monto):float
{
   $totaliva=$monto+($monto*0.13);
   return $totaliva;
}
calcularmonto($monto);
function calcularmontoiva(int $monto):float
{
   $totalsiniva=$monto-($monto*0.13);
   return $totalsiniva;
}

try{
   echo "resultado de las operaciones". (($iva=="true"))?($totaliva($monto)):($totalsiniva($monto));
}
catch(typeError ){
   echo "error".$e->getMessage();
}

echo "edad". ($edad)>=18?"puedes realizar la compra":"no puedes realizar la compra";

calcularmontoiva($monto);
*/

// tercer ejemplo de funciones y aplicacion de arrays 
// array de promedio de notas de 10 estudiantes 

function promedio(int|float ...$notas)
{ 
   $sumar=0;
   $prom=0;
      foreach( $notas as $nota){
      $suma+=$nota;
      }
     return $prom=$suma/count($notas);
}
 echo "el promedio de las notas es: ".promedio(45,67.9,45.6,34,34,34,78,98,67);

?>