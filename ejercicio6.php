<?php
$altriangulo=$_GET['c'];

echo "<pre>"; 
        for ($i = 0; $i < $altriangulo; $i++) {
        
            for ($j = 0; $j < $altriangulo - $i - 1; $j++) {
                echo " ";
            }
            for ($k = 0; $k < (2 * $i + 1); $k++) {
                echo "*";
            }

            echo "\n";
        }
    echo "</pre>";
?>