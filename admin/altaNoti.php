<?php
    include "../js/conexion.php";

    $nombre = $_POST['tituNot'];
    $descripcion = $_POST['descNot'];
    $fecha = $_POST['fechaNot'];

    if(isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        // Obtener información del archivo
        $file_info = $_FILES['img'];

        // Validar tipo de archivo permitido
        $allowed_types = ['image/gif', 'image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
        $file_type = $file_info['type'];
    
        if (!in_array($file_type, $allowed_types)) {
            // Tipo de archivo no permitido
            header("Location: noticias.php?error=Solo se permiten archivos GIF, JPEG, JPG, PNG y WebP.");
            exit;
        }

        // Validar tamaño máximo
        $max_size = 1 * 1024 * 1024; // 1 MB en bytes
        $file_size = $file_info['size'];
        
        if ($file_size > $max_size) {
            // Tamaño de archivo excede el límite
            header("Location: noticias.php?error=El tamaño máximo permitido es de 1 MB.");
            exit;
        }

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
        header('Location: noticias.php');
    } else {
        echo "Error";
    }

    $conn = null;
?>