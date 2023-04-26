<?php
    include "../js/conexion.php";
    $nom = $_POST["nom"];
    $descrip=$_POST["descrip"];
    $prc=$_POST["prc"];
    $img=$_FILES['img']['name'] ? "../img/platillos/".$_FILES['img']['name'] : "../img/platillos/no-image.png";

    $stmt = $conn->prepare("INSERT INTO `menu`(`nombre`, `descripcion`, `precio`, `foto`) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $nom);
    $stmt->bindParam(2, $descrip);
    $stmt->bindParam(3, $prc);
    $stmt->bindParam(4, $img);
    if($stmt->execute()){
    include("subirimg.php");
    header("Location:menu.php");
    }
    $conn=null;
?>
