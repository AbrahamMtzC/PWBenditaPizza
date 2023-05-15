<?php
    include "../js/conexion.php";

    $id2 = $_POST['id2'];
    $nombre2 = $_POST['prod2Nom']; 
    $descripcion2 = $_POST['prod2Desc'];
    $precio2 = $_POST['prod2Prc'];
    $categoria2 = $_POST['prod2Cat'];

    if(isset($_FILES['img2']) && $_FILES['img2']['error'] == 0) {
        // Si se recibió una imagen y no hay errores, se define la ruta donde se guardará y se mueve el archivo a esa ruta
        $img = "../img/productos/" . basename($_FILES['img2']['name']);
        move_uploaded_file($_FILES['img2']['tmp_name'], $img);
    } else {
        // Si no se recibió una imagen o hay algún error, se asigna una imagen por defecto
        $img = $_POST['imgNoChange'];
    }

    $stmt = $conn->prepare("UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, foto = ?, idCat = ? WHERE id = ?;");
    $resultado = $stmt->execute([$nombre2, $descripcion2, $precio2, $img, $categoria2, $id2]);

    if($resultado === TRUE){
        include("subirimg.php");
        header('Location: productos.php');
    } else {
        echo "Error";
    }

    $conn = null;
?>