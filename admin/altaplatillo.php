<?php
    include "../js/conexion.php";
    $nombre = $_POST['txtNombre'];
    $descripcion = $_POST['txtDescripcion'];
    $precio = $_POST['txtPrecio'];
    $foto = $_POST['txtFoto'];

    $stmt = $conn->prepare("INSERT INTO menu(nombre, descripcion, precio, foto) VALUES (?, ?, ?, ?)");
    $resultado = $stmt->execute([$nombre, $descripcion, $precio, $foto]);

    if($resultado === TRUE){
        header('Location: menu.php');
    } else {
        echo "Error";
    }

    $conn = null;
?>