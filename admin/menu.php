<?php
    include("../js/conexion.php");
    $stmt = $conn->prepare("SELECT * FROM menu");
    $stmt->execute();
    $menu = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
    <html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrador de contenidos</title>
        <script src="/js/scripts.js"></script>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="bootstrap/css/bootstrap-grid.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/0e1cd44541.js" crossorigin="anonymous"></script>
        <!-- Estilos -->
        <link rel="stylesheet" href="css/estilos.css">
    </head>
<body>
    <nav class="sidebar">
        <ul>
            <li><a href="#"><i class="fas fa-bars"></i><span>Categorias</span></a></li>   
            <li><a href="#"><i class="fas fa-bars"></i><span>Menú</span></a></li>
            <li><a href="#"><i class="fas fa-images"></i><span>Imagenes</span></a></li>
            <li><a href="#"><i class="fas fa-edit"></i><span>Editor de textos</span></a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i><span>Cerrar sesión</span></a></li>
        </ul>
    </nav>
    <div class="cont">
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
    </div>
</body>
</html>

<?php
    $conn = null;
?>