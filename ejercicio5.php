<?php
//sentencia if 
/*
$compra=$_GET['c'];
$puntos=0;
$puntos2=0;
if ($compra >50 & $compra<=100) {
$puntos=$puntos+5;
    echo "acumulaste 5 punto <br>";
}
elseif ($compra>100 & $compra<=200) {
    $puntos=$puntos+15;
        echo "acumulaste 15 punto <br>";
}
elseif ($compra >200 & $compra<=500) {
    
    $puntos=$puntos+30;
        echo "acumulaste 30 punto <br>";
}
elseif ($compra >500 ) {
    
    $puntos=$puntos+60;
        echo "acumulaste 60 punto <br>";
}
echo "puntos acumulados $puntos";

//$puntos2=($compra>50)?5:($compra>100)?15:0; //operador ternario
//echo "puntos acumlados de dos:$puntos2"


switch ($compra) {
    case ($compra>50 && $compra<=100):
        $puntos2+=5;
        break;
    
    default:
        $puntos2=10;
        break;
}
echo "puntos dos acumulados".$puntos2."<br>";

// con el metodo while 
$inferior=$_GET['i'];
$superior=$_GET['s'];
$c=0;
while($inferior <= $superior){
    echo $inferior."<br>";
     if($inferior%7==0){
              $c++;
     }
     $inferior++;
}
echo "datos de contador".$c."<br>";
do {
    if ($indiceInferior % 7 == 0) {
        $contador++;
    }

    $indiceInferior++;
} while ($indiceInferior <= $indiceSuperior);

echo "contador: " . $contador . "<br>"
*/
// uso de el foreach
$datos=$_GET['c'];
$datos2=$_GET['i'];
$datos3=$_GET['s'];
$mostrado=[];
array_push ($mostrado=["nombre"=>$datos,
"apellido"=>$datos2,
"materia"=>$datos3]);

echo "<br>";
var_dump($mostrado);
echo "<br>";
/*
$electrodomesticos=[
        ["nombre"=>"televisor",
        "precio"=>4500,
        "estado"=>true
        ],
        ["nombre"=>"bisicleta",
        "precio"=>4556,
        "estado"=>true
         ],
        ["nombre"=>"heladera",
        "precio"=>4589,
        "estado"=>true
        ]
];
foreach($electrodomesticos as $productos ){
    echo $productos['nombre']."<br>";
    echo $productos['precio']."<br>";
    echo ($productos['estado'])?"disponible"."<br>":"no esta disponble"."<br>";
}
echo "<br>";
var_dump($electrodomesticos);
echo "<br>";
?>*/