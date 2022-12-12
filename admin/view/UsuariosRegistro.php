<?php

    include_once 'conexion.php';
    $US = $_POST["US"];
    $CON = $_POST["CON"];
   
    
    $sentencia = $bd->prepare("INSERT INTO usuario(usuario,contraseña) VALUES (?,?);");
    $resultado = $sentencia->execute([$US,$CON]);

    if ($resultado === TRUE) {
        header('Location: index2.php?mensaje=registrado');
    } else {
        header('Location: index2.php?mensaje=error');
        exit();
    }
    
?>