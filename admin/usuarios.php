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
                <th>Usuario</th>
                <th>Clave</th>
                <th>Email</th>
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Karen Rivas</td>
                <td>Bendiciondepizzas06</td>
                <td>Karen_Rivas00@gmail.com</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>Jesús Ruiz</td>
                <td>nuggetdepollo04</td>
                <td>Jesus_R1234@gmail.com</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
           
            <tbody>
        </table>
    </div> 
    <!-- insertar -->
    <div class="formAgregar">
        <h2> Agregar una Nueva Usuario </h2>
        <form method="POST" action="altaUser.php">
            <table>
                <tr>
                    <td>Nombre de usuario:</td>
                    <td><input type="text" name="NomUser"></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="text" name="ContraUser"></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="text" name="CorreoUser"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Ingresar Usuario"></td>
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