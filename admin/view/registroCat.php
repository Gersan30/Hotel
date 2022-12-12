<?php

    include_once 'conexion.php';
    $nombre = $_POST["Nom"];
    $Est = $_POST["Est"];
   
    
    $sentencia = $bd->prepare("INSERT INTO categoriahab(Nombre_cat,Estado) VALUES (?,?);");
    $resultado = $sentencia->execute([$nombre,$Est]);

    if ($resultado === TRUE) {
        header('Location: index2.php?mensaje=registrado');
    } else {
        header('Location: index2.php?mensaje=error');
        exit();
    }
    
?>