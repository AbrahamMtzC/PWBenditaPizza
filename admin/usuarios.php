<?php
    include("../js/conexion.php");
    include("header.php");
?>
<div class="catego">
    <div>
        <h2>Usuarios</h2>
        <table class="contTabla">
            <thead>
            <tr>
                <th>ID</th>
                <th>Categoría</th>
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Chicago Style</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tradicional</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Para Compartir</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Ensaladas</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tbody>
        </table>
    </div> 
    <!-- insertar -->
    <div class="formAgregar">
        <h2> Agregar una Nueva Categoría </h2>
        <form method="POST" action="altaProd.php">
            <table>
                <tr>
                    <td>Nombre de la Categoría</td>
                    <td><input type="text" name="catNom"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Ingresar Categoría"></td>
                </tr>
            </table>
        </form>
    </div>
    <!-- fin insertar -->
</div>
<?php
    include("footer.php");
    $conn = null;
?>