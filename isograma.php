<?php

$correcto = "Es un isograma";
$incorrecto = "No es un isograma";

if (isset($_GET['palabra']) && !empty(trim($_GET['palabra']))) {
    $caracteres = str_split(trim($_GET['palabra']));
    $comprobar = [];

    foreach ($caracteres as $caracter):
        if (in_array($caracter, $comprobar)) {
            ?>
            <p><?= $incorrecto ?></p>
            <?php
            exit;
        }
        $comprobar[] = $caracter;
    endforeach
    ?>

    <p><?= $correcto ?></p>
    
    <?php
} else {
    ?>
    <p>Palabra no encontrada.</p>
    <?php
}
