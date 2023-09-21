<?php
// Nombre del aprendiz: Eliasib Cantor
// Programa de formación: Desarrollo Web con PHP
// Evidencia: Uso de funciones en PHP

// Función que realiza operaciones aritméticas básicas
function operaciones($num1, $num2, $operacion = "S") {
    switch ($operacion) {
        case "S":
            $resultado = $num1 + $num2;
            break;
        case "R":
            $resultado = $num1 - $num2;
            break;
        case "M":
            $resultado = $num1 * $num2;
            break;
        case "D":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "No es posible dividir por cero";
            }
            break;
        default:
            $resultado = "Operación no válida";
    }
    return $resultado;
}
?>
