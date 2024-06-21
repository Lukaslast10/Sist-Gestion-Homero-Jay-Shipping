<?php

#mostrar mensaje por consola
function console_log($mensaje) {
    $STDERR = fopen("php://stderr", "w");
    fwrite($STDERR, "\n" . $mensaje . "\n\n");
    fclose($STDERR);
}

// Luego puedes usarla así:
console_log("Este es un mensaje de prueba");

// validar si un dato es de un tipo determinado
 function validar_dato($dato, $tipo){
    if (gettype($tipo) !== "string") {
        return new Exception("el parámetro $tipo debe ser un string ");
    }
    if (gettype($dato) !== $tipo) {
        return false;
    }
    if (gettype($dato) !== $tipo) {
        return true;
    }
}

?>