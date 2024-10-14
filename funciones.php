<?php


function conectar_select()
{
    return new PDO('pgsql:host=localhost;dbname=usuario', 'usuario', 'usuario');

}

function conectar()
{
    return pg_connect("host=localhost dbname=usuario user=usuario password=usuario");

}

function mostrar_errores(array $errores){

    foreach($errores as $error){ ?>
        <h1><?="$error"?></h1><?php
    }
}

function insertar($nombre, $apellidos, $dni){

    $pdo = pg_connect("host=localhost dbname=usuario user=usuario password=usuario");

    $data = [
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'dni' => $dni
    ];

    return pg_insert($pdo, 'usuarios', $data);
    
}

function eliminar($dni){
    
    $pdo = pg_connect("host=localhost dbname=usuario user=usuario password=usuario");
    $dni = [ 'dni' => $_POST['dni']];
    return pg_delete($pdo, 'usuarios', $dni);
}

function comprobar_parametros(){

    $errores = [];

    (isset($_GET['nombre']) && !empty($_GET['nombre'])) ? $nombre = trim($_GET['nombre']) : $errores[] = "Nombre vacio";
    (isset($_GET['apellidos']) && !empty($_GET['apellidos'])) ? $apellidos = trim($_GET['apellidos']) : $errores[] = "Apellidos vacios";
    (isset($_GET['dni']) && !empty(trim($_GET['dni']))) ? $dni = trim($_GET['dni']) : $errores[] = "DNI vacio";


    if(!empty($errores)){

        return mostrar_errores($errores);

    } else {

        return insertar($nombre, $apellidos, $dni);

    }
}


