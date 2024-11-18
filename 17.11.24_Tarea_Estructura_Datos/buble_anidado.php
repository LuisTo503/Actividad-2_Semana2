<?php
// Definimos la altura de la pirámide
$alturaPiramide = 10;

// Bucle externo para las filas
for ($i = 1; $i <= $alturaPiramide; $i++) {
    // Bucle para imprimir espacios
    for ($j = $i; $j < $alturaPiramide; $j++) {
        echo " ";
    }
    // Bucle para imprimir asteriscos
    for ($asteriscos = 1; $asteriscos  <= (2 * $i - 1); $asteriscos ++) {
        echo "*";
    }
    // Salto de línea después de cada fila
    echo "\n";
}

?>