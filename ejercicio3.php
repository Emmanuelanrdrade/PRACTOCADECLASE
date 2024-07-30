<!DOCTYPE html>
<html>
  <head>
    <title>ejercicio de clase </title>
  </head>
  <body>
	<?php
            // array 
            $platos=array("sopa","saice");
            $platos=["saice","sopa","chancho"];

            echo "<pre>";
            var_dump($platos);
            echo "</pre>";

            //insertar datos 
               $platos[2]="nuevo plato";
               $platos[3]="chancho";
               echo "<pre>";
               var_dump($platos);
               echo "</pre>";

            // incertar al inicio 
                array_unshift($platos,"jugos");
                echo "<pre>";
                var_dump($platos);
                echo "</pre>";
               
            // insertar al final 
                array_push($platos,"ensaladas");
                echo "<pre>";
                var_dump($platos);
                echo "</pre>";
                
                // array de dos dimenciones 

                $electrodomesticos=[
                    "nombre"=>"televisor",
                    "modelo"=>"lg",
                    "precio"=>450,
                    "pulgadas"=>"32",
                    "procedencia"=>"china",
                    "accesorios"=>[
                        "game"=>"si",
                        "smart"=>"no",
                        "control"=>"si",
                    ]
                    
                ];
                echo "<pre>";
                var_dump($electrodomesticos);
                echo "</pre>";
               

                //para imprimir datos especificos de un array 
                echo $electrodomesticos["nombre"]."<br>".
                $electrodomesticos["precio"]."<br>".$electrodomesticos["accesorios"]["smart"];
                // mostrar  de la otra manera los dats de el array 
                // agregar un nuevo accesorio a un array 
                //alternativa array_push($electrodomesticos["accesorios"],["usd"=>"si"]); continua 
                //aqui // lo que hace es crear un array nuevo por que no esta definido //
                //para agregar de forma de una posicion o indice espesifico 
                $electrodomesticos["accesorios"]["usb"]="si";
                

                // para averiguar si un array tiene datos
                $clientes=[]; 

                var_dump(empty($platos));
                var_dump(empty($electrodomesticos));
                var_dump(empty($clientes));
                var_dump(isset($clientes));
                var_dump(isset($electrodomesticos["procedencia"]));

                // manjeo de los indices 
                //ordenar de menor a mayor
                sort($platos);
                echo "<pre>";
                var_dump($platos);
                echo "</pre>";
                //ordena de mayor a menor 
                rsort($platos);
                echo "<pre>";
                var_dump($platos);
                echo "</pre>";
                // ordenar array de dos dimenciones segun los valores de orden alfabetico ascedente 

                asort($electrodomesticos);
                echo "<pre>";
                var_dump($electrodomesticos);
                echo "</pre>";
                 // ordenar array de dos dimenciones segun los valores de orden alfabetico descendente
                 arsort($electrodomesticos);
                 echo "<pre>";
                 var_dump($electrodomesticos);
                 echo "</pre>";
                 // ordenar array de dos dimenciones segun los indices de orden alfabetico acendente
                ksort($electrodomesticos);
                echo "<pre>";
                var_dump($electrodomesticos);
                echo "</pre>";
                // ordenar array de dos dimenciones segun los indices de orden alfabetico descendente
                krsort($electrodomesticos);
                echo "<pre>";
                var_dump($electrodomesticos);
                echo "</pre>";
	?>

  </body>
</html>