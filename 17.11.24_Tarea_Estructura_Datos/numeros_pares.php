<?php

function sumarPares($numeros)
{
    $suma = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) { //si el numero es par
            $suma += $numero; // sumamos el numero par a la suma total
        }
    }
    return $suma;   //devolvermos la suma total de los pares
}

//pintamos
$arrayNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$resultado = sumarPares($arrayNumeros);
echo "La suma de números pares es :" . $resultado;
