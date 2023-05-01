<?php 
    include "../js/conexion.php";
    $codigo = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM menu WHERE id = ?;");
    $resultado = $stmt->execute([$codigo]);

    if($resultado === TRUE){
        header('Location: menu.php');
    } else {
        echo "Error";
    }

    $conn = null;
?>