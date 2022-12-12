<?php

    include_once 'conexion.php';
    $A = $_POST["A"];
    $B = $_POST["B"];
    $C = $_POST["C"];
    $D = $_POST["D"];
    $E = $_POST["E"];
    $F = $_POST["F"];
    $G = $_POST["G"];
    $H = $_POST["H"];
    $I = $_POST["I"];
    $J = $_POST["J"];
    $K = $_POST["K"];
    
    $sentencia = $bd->prepare("INSERT INTO habitacion_h(Numero_Hab,Nombre_Hab,Precio,Capacidad,Tamaño,Cantidad,Descripcion,Cantidad_Cam,Modelo_Cam,Otros_Det,Estado) VALUES (?,?,?,?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$A,$B,$C,$D,$E,$F,$G,$H,$I,$J,$K]);

    if ($resultado === TRUE) {
        header('Location: index2.php?mensaje=registrado');
    } else {
        header('Location: index2.php?mensaje=error');
        exit();
    }
    
?>