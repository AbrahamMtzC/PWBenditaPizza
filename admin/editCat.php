<?php 
    include "header.php";

    if(!isset($_GET['id'])){
        header('Location: menu.php');
    }

    include "../js/conexion.php";
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM menu WHERE id = ?;");
    $stmt->execute([$id]);
    $platillo = $stmt->fetch(PDO::FETCH_OBJ);
?>

<hr>
<h3> Editar platillos: </h3>
<form method="POST" action="editarProceso.php">
    <table>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="txt2Nombre" value="<?php echo $platillo->nombre ?>"></td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td><input type="text" name="txt2Descripcion" value="<?php echo $platillo->descripcion ?>"></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><input type="text" name="txt2Precio" value="<?php echo $platillo->precio ?>"></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="text" name="txt2Foto" value="<?php echo $platillo->foto ?>"></td>
        </tr>
        <tr>
            <input type="hidden" name= "id2" value="<?php echo $platillo->id ?>">
            <td><input type="submit" value="EDITAR PLATILLO"></td>
        </tr>
    </table>
</form>

<?php
    $conn = null;
?>