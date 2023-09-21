<?php
// Incluye el archivo biblioteca.php
include 'biblioteca.php';

// Obtiene los valores del formulario
$num1 = isset($_POST['numero1']) ? $_POST['numero1'] : 0;
$num2 = isset($_POST['numero2']) ? $_POST['numero2'] : 0;
$operacion = isset($_POST['operacion']) ? $_POST['operacion'] : 'S';

// Calcula el resultado utilizando la función operaciones()
$resultado = operaciones($num1, $num2, $operacion);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" >
    <title>Resultado</title>
</head>
<body>
     <!--start div background-->
    <div class="bg1"></div>
    <div class="bg1 bg2"></div>
    <div class="bg1 bg3"></div>
    <!--end div background-->

    <h1 class="operacio">Resultado de la Operación</h1>

    <div class="containe">
        <div class="ressull"> 
            <p>Número 1: <?php echo $num1; ?></p>
            <p>Número 2: <?php echo $num2; ?></p>
            <p>Operación: <?php echo $operacion; ?></p>
            <p>Resultado: <?php echo $resultado; ?></p>
            <div class="aa">
                <a href="index.php">Volver al inicio :)</a>
            </div>
        </div>
    </div>
</body>
</html>
