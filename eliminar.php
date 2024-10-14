<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label>DNI</label>
        <input type="text" name="dni">
        <button onclick="eliminar()">Borrar</button>
    </form>
    <?php
    require 'funciones.php';
    $pdo = conectar_select();
    $stmt = $pdo->query('SELECT *
                         FROM usuarios
                         ORDER BY nombre');
    ?>
    <table border="1">
        <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
        </thead>
        <tbody>
            <?php foreach ($stmt as $fila): ?>
                <tr>
                    <td><?= $fila['nombre'] ?></td>
                    <td><?= $fila['apellidos'] ?></td>
                    <td><?= $fila['dni'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>