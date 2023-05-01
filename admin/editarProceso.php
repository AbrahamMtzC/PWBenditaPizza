<?php
    include "header.php";

    include "../js/conexion.php";
    $id2 = $_POST['id2'];
    $nombre2 = $_POST['txt2Nombre'];
    $descripcion2 = $_POST['txt2Descripcion'];
    $precio2 = $_POST['txt2Precio'];
    $foto2 = $_POST['txt2Foto'];

    $stmt = $conn->prepare("UPDATE menu SET nombre = ?, descripcion = ?, precio = ?, foto = ? WHERE id = ?;");
    $resultado = $stmt->execute([$nombre2, $descripcion2, $precio2, $foto2, $id2]);

    if($resultado === TRUE){
        header('Location: menu.php');
    } else {
        echo "Error";
    }

    $conn = null;

?>