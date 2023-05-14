<?php 
    include "../js/conexion.php";
    $codigo = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM fotos WHERE id = ?;");
    $resultado = $stmt->execute([$codigo]);

    if($resultado === TRUE){
        header('Location: fotos.php');
    } else {
        echo "Error";
    }

    $conn = null;
?>