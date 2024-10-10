
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
<form action="resultado.php" method="get">
        <label>Primer operando:
            <input type="text" name="op1">
        </label>
        <br>
        <label>Segundo operando:
            <input type="text" name="op2">
        </label>
        <br>
        <label>Operación:
            <input type="text" name="op">
        </label>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    require 'auxiliar.php';

    $errores = [];

    if (!isset($_GET['op1'], $_GET['op2'], $_GET['op'])) {
    
    ?>
        <?= "" ?>
    
    <?php

    } else {
        $op1 = comprobar_primer_operando($errores);
        $op2 = comprobar_segundo_operando($errores);
        $op = comprobar_operacion($op2, $errores);
    
        if (hay_errores($errores)) {
            mostrar_mensajes_error($errores);
        } else {
            $res = calcular_operacion($op1, $op2, $op);
            mostrar_resultado($op1, $op2, $op, $res);
        }
    }
    ?>
</body>

</html>
