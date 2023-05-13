<?php
    include("../js/conexion.php");
    include("header.php");
?>
<div class="catego">
    <div>
        <h2>Noticias</h2>
        <table class="contTabla">
            <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Foto</th>
                <th>Fecha</th>
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>¿Ya sabes como festejar a mamá? 🍕😉</td>
                <td> </td>
                <td> </td>
                <td> 26/08/23 </td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>Para los amantes del mezcal, un coctel de guayaba, menta y un toque de limón, ¿Ya lo probaron? 🍹😋</td>
                <td> </td>
                <td> </td>
                <td> 26/08/23 </td>
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
                    <td>Título de la noticia:</td>
                    <td><input type="text" name="NomUser"></td>
                </tr>
                <tr>
                    <td>Descripción:</td>
                    <td><input type="text" name="ContraUser"></td>
                </tr>
                <tr>
                    <td>Foto:</td>
                    <td><input type="text" name="CorreoUser"></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><input type="text" name="CorreoUser"></td>
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