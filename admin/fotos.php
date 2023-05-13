<?php
    include("../js/conexion.php");
    include("header.php");
?>
<div class="catego">
    <div>
        <h2>Fotos</h2>
        <table class="contTabla">
            <thead>
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Titulo</th>
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td> </td>
                <td> </td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>2</td>
                <td> </td>
                <td> </td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
           
            <tbody>
        </table>
    </div> 
    <!-- insertar -->
    <div class="formAgregar">
        <h2> Agregar una Nueva Noticia </h2>
        <form method="POST" action=".php">
            <table>
                <tr>
                    <td>Título (Opcional):</td>
                    <td><input type="text" name="NomUser"></td>
                </tr>
                <tr>
                    <td>Foto:</td>
                    <td><input type="text" name="ContraUser"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Agregar Noticia"></td>
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