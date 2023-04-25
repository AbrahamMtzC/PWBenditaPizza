<?php
    include "../js/conexion.php";
    include "header.php";
    echo <<<HTML
        <div class="titulo">
            <h1>Editar Menú</h1>
        </div>
    HTML;

    $stmt = $conn->prepare("SELECT * FROM menu");
    $stmt->execute();
    // Realizar la consulta a la base de datos utilizando PDO
    $stmt = $conn->query("SELECT id, nombre, descripcion, precio, foto FROM menu");
    // Asignar los resultados de la consulta a la variable $menu
    $menu = $stmt->fetchAll(PDO::FETCH_ASSOC);

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