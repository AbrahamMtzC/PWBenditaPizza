<?php
    include("../js/conexion.php");
    $stmt = $conn->prepare("SELECT * FROM menu");
    $stmt->execute();
    $menu = $stmt->fetchAll(PDO::FETCH_ASSOC);
    include("header.php");
?>

        <div class="titulo">
            <h1>Editar Menú</h1>
            <button type="button" class="btn btn-sm" style="width:auto" onclick="document.getElementById(&quot;id01&quot;).style.display=&quot;block&quot;">
            <i class="fa fa-cutlery" style="font-size:60px;"></i></button>
            <h6>Agregar Platillo/Bebida</h6>
        </div>

        <table class="tablamenu">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Foto</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $platillo): ?>
                    <tr>
                        <td> <?php echo $platillo['id']; ?> </td>
                        <td><?php echo $platillo['nombre']; ?></td>
                        <td><?php echo $platillo['descripcion']; ?></td>
                        <td><?php echo $platillo['precio']; ?></td>
                        <td>
                            <img src="<?php echo $platillo['foto']; ?>">                    
                        </td>
                        <td>
                            <a href="editCat.php?id=<?php echo $platillo['id']; ?>">
                            <button type="button" class="btn btn-sm" style="width:auto">
                                <i class="fa fa-pencil-square-o"></i> 
                            </button>
                        </td>
                        <td>
                            <a href="elimPlatillo.php?id=<?php echo $platillo['id']; ?>">
                            <button type="button" class="btn btn-sm" style="width:auto">
                                <i class="fa fa-trash"></i> 
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- insertar -->
        <hr>
        <h3> Agregar platillos: </h3>
        <form method="POST" action="altaplatillo.php">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txtNombre"></td>
                </tr>
                <tr>
                    <td>Descripcion</td>
                    <td><input type="text" name="txtDescripcion"></td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td><input type="text" name="txtPrecio"></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td><input type="text" name="txtFoto"></td>
                </tr>
                <tr>
                    <td><input type="reset" name="" id=""></td>
                    <td><input type="submit" value="INGRESAR PLATILLO"></td>
                </tr>
            </table>
        </form>
        <!-- fin insertar -->
<?php
    include("footer.php");
    $conn = null;
?>