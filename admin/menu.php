<?php
    include "../js/conexion.php";
    include "header.php";
    echo <<<HTML
        <div class="titulo">
            <h1>Editar Menú</h1>
            <button type="button" class="btn btn-sm" style="width:auto" onclick="document.getElementById(&quot;id01&quot;).style.display=&quot;block&quot;"><i class="fa-sharp fa-solid fa-file-circle-plus"
            style="font-size:60px;"></i></button>
        </div>
    HTML;

    $stmt = $conn->prepare("SELECT * FROM menu");
    $stmt->execute();
    // Realizar la consulta a la base de datos utilizando PDO
    $stmt = $conn->query("SELECT id, nombre, descripcion, precio, foto FROM menu");
    // Asignar los resultados de la consulta a la variable $menu
    $menu = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo <<<HTML
    <!-- Form Alta Categoría -->
    <div id="id01" class="modal">
        <span onclick="document.getElementById(&quot;id01&quot;).style.display=&quot;none&quot;" class="close" title="Close Modal">&times;</span>

        <form class="modal-content" action="altaplatillo.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                <h1>Añadir un nuevo platillo o bebida.</h1>
                <hr>
                <div class="mb-3">
                    <label class="form-label" for="nom"><b>Nombre del Platillo/bebida</b></label>
                    <input class="form-control" type="text" placeholder="Escribe el nombre del platillo" name="nom" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="descrip"><b>Descripción del platillo/bebida</b></label>
                    <textarea class="form-control" name="descrip" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="prc"><b>Precio</b></label><br>
                    <input class="form-control" type="text" placeholder="Escribe el precio el platillo" name="prc" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="img"><b>Imagen/Fotografía</b></label>
                    <input class="form-control" type="file" name="img">
                </div>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById(&quot;id01&quot;).style.display=&quot;none&quot;" class="cancelbtn">Cancelar</button>
                    <button type="submit" class="signup">Crear platillo/bebida</button>
                </div>

            </div>
        </form>
    </div>
    <!-- Fin Alta Categoría -->
    HTML;

    // Verificar si hay resultados antes de imprimir la tabla
    if (!empty($menu)) {
        echo <<<HTML
        <table class="tablamenu">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
        HTML;
    
        foreach ($menu as $platillo) {  //Recorrer los resultados de la consulta y asignar cada valor a una variable correspondiente
            $id = $platillo['id'];
            $nombre = $platillo['nombre'];
            $descripcion = $platillo['descripcion'];
            $precio = $platillo['precio'];
            $foto = $platillo['foto'];
    
            echo <<<HTML
                <tr>
                    <td>$id</td>
                    <td>$nombre</td>
                    <td>$descripcion</td>
                    <td>$precio</td>
                    <td><img src="$foto"></td>
                </tr>
            HTML;
        }
    
        echo <<<HTML
            </tbody>
            </table>
        HTML;

    } else {
        echo "No hay platillos en el menú";
    }

    $conn = null;
?>