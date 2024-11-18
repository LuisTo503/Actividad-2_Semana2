<?php
function frecuenciaCaracteres($cadena) {
    // Inicializamos un array vacío para almacenar la frecuencia de caracteres
    $frecuencia = [];

    // Recorremos cada carácter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        // Si el carácter ya existe en el array, incrementamos su contador
        if (array_key_exists($caracter, $frecuencia)) {
            $frecuencia[$caracter]++;
        } else {
            // Si no existe, lo inicializamos en 1
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}

// Ejemplo de uso
$texto = "Frecuencia de Caracteres";
$resultado = frecuenciaCaracteres($texto);
print_r($resultado);
?>