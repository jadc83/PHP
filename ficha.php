<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Usuario</p>
    
    <?php 
    
    if (isset($_GET['nombre']) || isset($_GET['apellidos'])) {
        
        if (empty($_GET['nombre'])){
            $nombre = "Nombre no puede estar vacio";
        } else {
            $nombre = $_GET['nombre'];
        }
        
        $apellidos = $_GET['apellidos'];
        $dni = $_GET['dni'];
     } else {
        $nombre = "Nombre no definido";
        $apellidos = "Apellidos no definidos";
        $dni = "DNI no definido";
    }

    ?>
    <?= "Nombre: " . $nombre ."</p>"?>
    <?= "Apellidos: " . $apellidos ."</p>"?>
    <?= "Numero de DNI: " . $dni ."</p>"?>

</body>
</html>