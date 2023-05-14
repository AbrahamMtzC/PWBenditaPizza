<?php
    include "../js/conexion.php";

    $titulo = $_POST['tituFoto'];

    if(isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        // Si se recibió una imagen y no hay errores, se define la ruta donde se guardará y se mueve el archivo a esa ruta
        $img = "../img/fotos/" . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'], $img);
    } else {
        // Si no se recibió una imagen o hay algún error, se asigna una imagen por defecto
        $img = "../img/platillos/no-image.png";
    }

    $stmt = $conn->prepare("INSERT INTO fotos(titulo, foto) VALUES (?, ?)");
    $resultado = $stmt->execute([$titulo, $img]);

    if($resultado === TRUE){
        include("subirimg.php");
        header('Location: fotos.php');
    } else {
        echo "Error";
    }

    $conn = null;
?>