<?php
    include "../js/conexion.php";
    
    $id2 = $_POST['id2'];
    $titulo2 = $_POST['titu2Foto'];

    if(isset($_FILES['img2']) && $_FILES['img2']['error'] == 0) {
        // Si se recibió una imagen y no hay errores, se define la ruta donde se guardará y se mueve el archivo a esa ruta
        $img2 = "../img/fotos/" . basename($_FILES['img2']['name']);
        move_uploaded_file($_FILES['img2']['tmp_name'], $img2);
    } else {
        // Si no se recibió una imagen o hay algún error, se asigna una imagen por defecto
        $img2 = $_POST['imgNoChange'];
    }

    $stmt = $conn->prepare("UPDATE fotos SET foto = ?, titulo = ? WHERE id = ?;");
    $resultado = $stmt->execute([$img2, $titulo2, $id2]);

    if($resultado === TRUE){
        include("subirimg.php");
        header('Location: fotos.php');
    } else {
        echo "Error";
    }

    $conn = null;
?>