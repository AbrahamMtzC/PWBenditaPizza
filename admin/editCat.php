<?php
    include "../js/conexion.php";

    $id = $_POST["idEdit"];
    $nom = $_POST["nomEdit"];
    $descrip=$_POST["descEdit"];
    $prc=$_POST["prcEdit"];
    $img="../img/platillos/".$_POST["imgEdit"];

    $stmt=$conn->prepare("UPDATE `menu` SET `nombre`=`$nom`, `descripcion`=`$descrip`, `precio`=`$prc`, `foto`=`$img` WHERE id=$id");

    if($stmt->execute()){
        header("Location:menu.php");
    }

    $conn=null;
?>

