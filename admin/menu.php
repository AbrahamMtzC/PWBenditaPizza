<?php
    include "../js/conexion.php";
    include "header.php";
    echo <<<HTML
        <div class="titulo">
            <h1>Editar Menú</h1>
            <button type="button" class="btn btn-sm" style="width:auto" onclick="document.getElementById(&quot;id01&quot;).style.display=&quot;block&quot;">
            <i class="fa fa-cutlery" style="font-size:60px;"></i></button>
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
    <!-- Form Editar Categoria -->


    <!-- <div id="editCat" class="modal">
        
        <span onclick="document.getElementById(&quot;editCat&quot;).style.display=&quot;none&quot;" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="editCat.php" method="POST">
            <input type="hidden" name="idEdit" id="idEdit">
            <div class="container">
                <h1>Modificar categoría<span id="nom"></span></h1>
                <hr>

                <div class="mb-3">
                    <label class="form-label" for="nom"><b>Nombre del Platillo/bebida</b></label>
                    <input class="form-control" type="text" placeholder="Escribe el nombre del platillo" name="nomEdit" id="nomEdit" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="descrip"><b>Descripción del platillo/bebida</b></label>
                    <textarea class="form-control" name="descripEdit" id="descripEdit" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="prc"><b>Precio</b></label><br>
                    <input class="form-control" type="text" placeholder="Escribe el precio el platillo" name="prcEdit" id="prcEdit" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="img"><b>Imagen/Fotografía</b></label>
                    <img src="" id="imgPlEdit" style="width:100px;">
                    <input class="form-control" type="file" name="imgEdit" id="imgEditSRC">
                </div>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById(&quot;editCat&quot;).style.display=&quot;none&quot;" class="cancelbtn">Cancelar</button>
                    <button type="submit" class="signup">Modificar platillo/bebida</button>
                </div>

            </div>
        </form>
    </div> -->

     <!-- Form Modificar Categoría -->
     <div id="editCat" class="modal">
     <span onclick="document.getElementById(&quot;editCat&quot;).style.display=&quot;none&quot;" class="close" title="Close Modal">&times;</span>
     <form class="modal-content" action="editCat.php" method="POST">
         <input type="hidden" name="idEdit" id="idEdit">
         <div class="container">
             <h1>Modificar categoría <span id="cat"></span></h1>
             <hr>
             <div class="mb-3">
                 <label class="form-label" for="nomEdit"><b>Categoría</b></label>
                 <input class="form-control" type="text" placeholder="Escribe el nombre de la categoría" name="nomEdit" id="nomEdit" required>
             </div>

             <div class="mb-3">
                 <label class="form-label" for="descrip"><b>Descripción</b></label><br>
                 <textarea class="form-control" name="descEdit" id="descEdit" rows="5"></textarea>
             </div>

             <div class="mb-3">
             <label class="form-label" for="prc"><b>Precio</b></label><br>
                 <input class="form-control" type="text" placeholder="Escribe el nombre de la categoría" name="prcEdit" id="prcEdit" required>
             </div>

             <div class="mb-3">
                 <label class="form-label" for="img"><b>Imagen</b></label>
                 <img src="" id="imgCatEdit" style="width:100px;">
                <input class="form-control" type="file" name="imgEdit" id="imgCatEditSRC">
             </div>

             <div class="clearfix">
                 <button type="button" onclick="document.getElementById(&quot;editCat&quot;).style.display=&quot;none&quot;" class="cancelbtn">Cancelar</button>
                 <button type="submit" class="signup">Modificar categoría</button>
             </div>
        </div>
    </form>
     </div>
    <!-- Fin Modificar Categoría -->


    // <!-- Fin Editar Categoria -->
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
                <th>Editar</th>
                <th>Eliminar</th>
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
                    <td>
                        <button type="button" class="btn btn-sm" style="width:auto" onclick="document.getElementById(&quot;id03&quot;).style.display=&quot;block&quot;">
                        <i class="fa fa-pencil-square-o"></i> </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm" style="width:auto" onclick="document.getElementById(&quot;id03&quot;).style.display=&quot;block&quot;">
                        <i class="fa fa-trash"></i> </button>
                    </td>
                    
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