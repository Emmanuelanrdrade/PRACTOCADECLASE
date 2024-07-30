<?php
// Definir un array inicial
$datos = array("como", "el", "juan","y");

// Mostrar el array original
echo "<h3>Array original:</h3>";
echo "<pre>";
print_r($datos);
echo "</pre>";

        $nuevoDato = $_POST['comentario'];
        array_push($datos, $nuevoDato);
        //$eliminarDato =$_POST ['eliminado'];
        $eliminaciones=["el","la","un","y"];
        for ($i=0; $i <=count($datos) ; $i++) { 
            if (($clave = array_search($eliminaciones[$i], $datos)) !== false) {
                unset($datos[$clave]);
            }
        }

        echo "<h3>Array después de la modificación:</h3>";
        echo "<pre>";
        print_r($datos);
        echo "</pre>";
       /* for ($i=0 ; $i<=count($datos);$i++){
            switch ($datos[$i]) {
                case ($datos[$i]=="el"):
                    unset($datos[$datos[$i]]);
                    break;
                case ($datos[$i]=="la"):
                        unset($datos[$datos[$i]]);
                        break;
                case ($datos[$i]=="un"):
                            unset($datos[$datos[$i]]);
                            break;
                case ($datos[$i]=="y"):
                                unset($datos[$datos[$i]]);
                                break;

            }

        }
   */
    echo "<h3>Array después de la modificación:</h3>";
    echo "<pre>";
    print_r($datos);
    echo "</pre>";

?>
  