<?php
    include("../js/conexion.php");
    include("header.php");
?>
<div class="catego">
    <div>
        <h2>Productos</h2>
        <table class="contTabla">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Foto</th>
                <th>Categoría</th>
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Bendita</td>
                <td>Pepperoni + jamón + tocino + champiñones</td>
                <td>$ 295 MX</td>
                <td><img src="" alt=""></td>
                <td>Chicago Style</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Meat Lovers</td>
                <td>Pepperoni + Salchicha Italiana + Tocino + Salami</td>
                <td>$ 315 MX</td>
                <td><img src="" alt=""></td>
                <td>Chicago Style</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Italiana</td>
                <td>Salchicha Italiana + Morrón Verde + Champiñones + Aceitunas + Cebolla Morada</td>
                <td>$ 285 MX</td>
                <td><img src="" alt=""></td>
                <td>Chicago Style</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Veggie</td>
                <td>Requesón + Espinaca + Morrón Verde + Champiñones + Aceitunas + Cebolla Morada</td>
                <td>$ 285 MX</td>
                <td><img src="" alt=""></td>
                <td>Chicago Style</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Bendita</td>
                <td>Pepperoni + jamón + tocino + champiñones</td>
                <td>$ 295 MX</td>
                <td><img src="" alt=""></td>
                <td>Chicago Style</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Meat Lovers</td>
                <td>Pepperoni + Salchicha Italiana + Tocino + Salami</td>
                <td>$ 315 MX</td>
                <td><img src="" alt=""></td>
                <td>Chicago Style</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Italiana</td>
                <td>Salchicha Italiana + Morrón Verde + Champiñones + Aceitunas + Cebolla Morada</td>
                <td>$ 285 MX</td>
                <td><img src="" alt=""></td>
                <td>Chicago Style</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Veggie</td>
                <td>Requesón + Espinaca + Morrón Verde + Champiñones + Aceitunas + Cebolla Morada</td>
                <td>$ 285 MX</td>
                <td><img src="" alt=""></td>
                <td>Chicago Style</td>
                <td> <a href=""> <i class="fa-regular fa-pen-to-square"></i></a> </td>
                <td> <a href=""> <i class="fa-sharp fa-solid fa-trash"></i> </a></td>
            </tr>
            <tbody>
        </table>
    </div> 
    <!-- insertar -->
    <div class="formAgregar">
        <h2> Agregar un Nuevo Producto </h2>
        <form method="POST" action="altaProd.php">
            <table>
                <tr>
                    <td>Nombre del Producto: </td>
                    <td><input type="text" name="prodNom"></td>
                </tr>
                <tr>
                    <td>Descripción del Producto: </td>
                    <td><input type="text" name="prodDesc"></td>
                </tr>
                <tr>
                    <td>Precio del Producto: </td>
                    <td><input type="text" name="prodPrc"></td>
                </tr>
                <tr>
                    <td>Foto del Producto: </td>
                    <td><input type="text" name="prodFoto"></td>
                </tr>
                <tr>
                    <td>Categoría del Producto: </td>
                    <td><input type="text" name="prodCat"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Ingresar Producto"></td>
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