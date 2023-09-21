<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" >
    <title>Calculadora</title>
</head>
<body>
    <!--start div background-->
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <!--end div background-->

    <h1>Calculadora</h1>
   
    <div class="formm">
        <form action="calcular.php" method="post">
            <label for="numero1">Número 1:</label>
            <input type="number" name="numero1" id="numero1" required>
            <br><br>
            
            <label for="numero2">Número 2:</label>
            <input type="number" name="numero2" id="numero2" required>
            <br><br>
            
            <label for="operacion">Operación:</label>
            <select name="operacion" id="operacion">
                <option value="S">Suma</option>
                <option value="R">Resta</option>
                <option value="M">Multiplicación</option>
                <option value="D">División</option>
            </select>
            <br><br>
            
            <input type="submit" value="Calcular :)">
        </form>
    </div>
</body>
</html>
