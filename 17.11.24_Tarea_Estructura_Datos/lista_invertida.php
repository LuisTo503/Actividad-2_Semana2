<?php

/*Problema de Lista Invertida:
Escribe un programa que tome un array de números y devuelva
una nueva lista que contenga los mismos elementos en orden inverso.
*/

function invertirLista($numeros)
{
    $listaInvertida = array();  //almacenar los datos invertidos en el array
    $longitud = count($numeros); // longitud del array origen

    //recorrido del array origen de derecha a izq.
    for ($i = $longitud - 1; $i >= 0; $i--) {
        $listaInvertida[] = $numeros[$i];   //adicion de cada string al nuevo array
    }
    return $listaInvertida;  //retornar el array invertido
}

//pintando
$numerosOrigen = [1, 2, 3, 4, 5];
$numerosInvertidos = invertirLista($numerosOrigen);
print_r($numerosInvertidos); //


?>