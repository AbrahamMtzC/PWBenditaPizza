<?php 
    include "js/conexion.php";

    $stmt = $conn->prepare("SELECT * FROM menu");
    $stmt->execute();
    $menu = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta description="Menú del sitio de Bendita Pizza">
    <meta keywords="Pizzas estilo Chicago, Restaurante de pizzas en Durango, Pasta fresca y casera, Hamburguesas gourmet, Comida para llevar, Bebidas refrescantes, Cena en familia, Servicio a domicilio, Ingredientes frescos y de alta calidad, Menú variado, Ambiente acogedor y relajante">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <header>
		<nav class="barra">
            <div class="logo">
                <a href="index.html"><img src="img/logotipo.png" alt="Logo oficial de Bendita Pizza"></a>
            </div>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="menu.php">Menú</a></li>
                <li><a href="noticias.html">Noticias</a></li>
                <li><a href="fotos.html">Fotos</a></li>
                <li><a href="reservar.html" class="bt-reservar">Reservar</a></li>
            </ul>
		</nav>
	</header>
    <main>
        <div class="separador"></div>
        <div class="galeria">
            <div class="contenido">
                <img src="img/platillos/no-image.png" alt="Papas a la francesa">
                <h3>Bendita</h3>
                <p>Pepperoni + Jamón + Tocino + Champiñones</p>
                <h6>$295.00</h6>
            </div>
            <div class="contenido">
                <img src="img/platillos/no-image.png" alt="Agua de Pepino">
                <h3>Meat Lovers</h3>
                <p>Pepperoni + Salchicha Italiana + Tocino + Salami</p>
                <h6>$315.00</h6>
            </div>

            <div class="contenido">
                <img src="img/platillos/no-image.png" alt="Papas a la francesa">
                <h3>Italiana</h3>
                <p>Salchicha Italiana + Morrón Verde + Champiñones + Aceitunas + Cebolla Morada</p>
                <h6>$285.00</h6>
            </div>
            <div class="contenido">
                <img src="img/platillos/no-image.png" alt="Agua de Pepino">
                <h3>Veggie</h3>
                <p>Requesón + Espinaca + Morrón Verde + Champiñones + Aceitunas + Cebolla Morada</p>
                <h6>$285.00</h6>
            </div>

            <?php foreach ($menu as $platillo): ?>
                <div class="contenido">
                    <img src="<?php echo substr($platillo['foto'], 3); ?>" alt="<?php echo $platillo['nombre']; ?>">
                    <h3> <?php echo $platillo['nombre']; ?> </h3>
                    <p> <?php echo $platillo['descripcion']; ?> </p>
                    <h6> <?php echo $platillo['precio']; ?> </h6>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="separador"></div>
    </main>
    <footer>
        <div class="columnas-footer">
            <div class="columna-footer">
                <h2>Come con nosotros</h2>
                <ul>
                    <li><a href="#">Menú</a></li>
                    <li><a href="#">Reservar una mesa</a></li>
                    <li><a href="#">Encuentra una sucursal</a></li>
                    <li><a href="#">Entrega a domicilio</a></li>
                </ul>
            </div>
            <div class="columna-footer">
                <h2>Explora</h2>
                <ul>
                    <li><a href="#">Blog de noticias</a></li>
                    <li><a href="#">Acerca de nosotros</a></li>
                    <li><a href="#">Historia</a></li>
                </ul>
            </div>
            <div class="columna-footer">
                <h2>Mantente conectado</h2>
                <ul>
                    <li><a href="#">Contáctanos</a></li>
                    <li><a href="https://www.facebook.com/BenditaPizzaDgo" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/benditapizzadgo/?hl=es" target="_blank">Instagram</a></li>
                </ul>
            </div>
        </div> 
        <div class="footlogo">
            <img src="img/altlogo.png" alt="Logo oficial de Bendita Pizza">
        </div>
        <div class="texto-footer">
            <p>@ 2023 BENDITA PIZZA</p>
        </div>
        <div class="footicons">
            <a href="https://www.facebook.com/BenditaPizzaDgo" target="_blank"><i class="fa-brands fa-facebook footicon"></i></a>
            <a href="https://www.instagram.com/benditapizzadgo/?hl=es" target="_blank"><i class="fa-brands fa-instagram footicon"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp footicon"></i></a>
        </div>
    </footer>
</body>
</html>

<?php
    $conn = null;
?>