<?php
$carrito = [
    ['producto' => 'Leche', 'precio' => 1.50],
    ['producto' => 'Pan', 'precio' => 2.00]
];

echo "<h3>Carrito de compras </h3>";
echo "<pre>";
var_dump($carrito);
echo "</pre>";

        $nuevoProducto = $_POST['producto'];
        $precio = $_POST['precio'];
        $carrito[] = ['producto' => $nuevoProducto, 'precio' => $precio];
    
        $productoEliminar = $_POST['productoEliminar'];
        foreach ($carrito as $clave => $producto) {
            if ($producto['producto'] == $productoEliminar) {
                unset($carrito[$clave]);
                break;
            }
        }
    
$total = 0;
foreach ($carrito as $producto) {
    $total += $producto['precio'];
}

echo "<h3>Carrito de  compras completado</h3>";
echo "<pre>";
var_dump($carrito);
echo "</pre>";

echo "<h3>Total del carrito Bs " . number_format($total, 2) . "</h3>";
?>