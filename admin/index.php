<?php
    $error = isset($_GET['error']) ? $_GET['error'] : "";
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de contenidos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="bootstrap/css/bootstrap-grid.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/0e1cd44541.js" crossorigin="anonymous"></script>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body class="formIniciar">
    <div class="register">
        <img class="site_logo" src="../img/logotipo.png" alt="Logo de Bendita Pizza">
        
        <form action="login.php" method="POST" class="form">
            <div class="form__field">
                <input type="text" name="user" placeholder="Nombre de Usuario">
            </div>
            <div class="form__field">
                <input type="password" name="pss" placeholder="••••••••••••">
            </div>
            <div class="form__field">
                <input type="submit" value="Iniciar Sesión">
            </div>
        </form>
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error ?></div>
        <?php endif ?>
        <p> <a href="usuarios.php">¿Olvidaste tu contraseña?</a> </p>
    </div>

    <a href="../index.html" id="btnSalir"> <i class="fa-solid fa-xmark"></i> </a>
    
</body>
</html>