<?php
    include "../js/conexion.php";

    $nombre = $_POST['tituNot'];
    $descripcion = $_POST['descNot'];
    $fecha = $_POST['fechaNot'];

    if(isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        // Si se recibió una imagen y no hay errores, se define la ruta donde se guardará y se mueve el archivo a esa ruta
        $img = "../img/noticias/" . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'], $img);
    } else {
        // Si no se recibió una imagen o hay algún error, se asigna una imagen por defecto
        $img = "../img/altlogo.png";
    }
    
    $stmt = $conn->prepare("INSERT INTO noticias(nombre, descripcion, foto, fecha) VALUES (?, ?, ?, ?)");
    $resultado = $stmt->execute([$nombre, $descripcion, $img, $fecha]);

    if($resultado === TRUE){
        include("subirimg.php");
        header('Location: noticias.php');
    } else {
        echo "Error";
    }

    $conn = null;
?>