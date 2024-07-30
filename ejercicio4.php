<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competición</title>
</head>
<body>
    <?php
    
    $competidores = [
        ["nombre" => "Juan", "hora" => "10:30:00"],
        ["nombre" => "Pedro", "hora" => "10:45:00"],
        ["nombre" => "Luis", "hora" => "11:00:00"],
        ["nombre" => "Maria", "hora" => "10:35:00"],
        ["nombre" => "Ana", "hora" => "10:55:00"],
        ["nombre" => "Carlos", "hora" => "11:10:00"],
        ["nombre" => "Lucia", "hora" => "10:25:00"],
        ["nombre" => "Miguel", "hora" => "11:05:00"],
        ["nombre" => "Sofia", "hora" => "10:50:00"],
        ["nombre" => "Daniel", "hora" => "10:40:00"],
    ];

    

    $horas = [
        strtotime($competidores[0]["hora"]),
        strtotime($competidores[1]["hora"]),
        strtotime($competidores[2]["hora"]),
        strtotime($competidores[3]["hora"]),
        strtotime($competidores[4]["hora"]),
        strtotime($competidores[5]["hora"]),
        strtotime($competidores[6]["hora"]),
        strtotime($competidores[7]["hora"]),
        strtotime($competidores[8]["hora"]),
        strtotime($competidores[9]["hora"])
    ];

    asort($horas);

    $indices = array_keys($horas);

    $ganador = $competidores[$indices[0]];
    echo "Ganador: " . $ganador['nombre'] . " con hora de llegada: " . $ganador['hora'] . "<br>";

    $segundo = $competidores[$indices[1]];
    $diferencia = $horas[$indices[1]] - $horas[$indices[0]];
    echo "Diferencia del segundo respecto al primero: " . $diferencia . "segundos <br>";

    $ultimo = $competidores[$indices[9]];
    echo "Último en llegar: " . $ultimo['nombre'] . " con hora de llegada: " . $ultimo['hora'] . "<br>";

    echo "Primeros tres lugares:<br>";
    echo "1. " . $competidores[$indices[0]]['nombre'] . " con hora de llegada: " . $competidores[$indices[0]]['hora'] . "<br>";
    echo "2. " . $competidores[$indices[1]]['nombre'] . " con hora de llegada: " . $competidores[$indices[1]]['hora'] . "<br>";
    echo "3. " . $competidores[$indices[2]]['nombre'] . " con hora de llegada: " . $competidores[$indices[2]]['hora'] . "<br>";
   
/// manera alternativa de los datos 

    ?>
    
</body>
</html>