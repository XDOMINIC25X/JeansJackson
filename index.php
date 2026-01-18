<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeans Jackson</title>

    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<header class="header">
    <div class="header-container">

        <img src="img/logo.png" class="logo" alt="Logo">

        <nav class="menu" id="menu">
            <a href="index.php">Inicio</a>
            <a href="catalogo.php">Catálogo</a>
            <a href="#quienes-somos">Quienes somos</a>
        </nav>

        <div class="hamburguesa" id="hamburguesa">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
</header>

<main class="main">

    <section class="hero animar">
        <h1>JEANS JACKSON</h1>
        SOMOS FABRICANTES
        
        <a class="btn" href="#productos">Ver productos</a>
    </section>

    <section id="productos" class="seccion animar">
        <h2>Top Productos</h2>

        <div class="grid-productos">
            <?php
            for ($i = 1; $i <= 6; $i++) {
                echo '
                <div class="producto destacado" data-id="'.$i.'">
                    <img src="img/producto'.$i.'.jpeg">
                    <h3>Producto '.$i.'</h3>
                </div>';
            }
            ?>
        </div>

        <div class="ver-mas">
            <a href="catalogo.php">Ver catálogo completo</a>
        </div>
    </section>

    <section id="quienes-somos" class="empresa animar">
        <h2>¿Quienes somos?</h2>
        <p>Somos Jeans Jackson, calidad premium en toda Colombia, Marca Colombiana con más de 27 años en el mercado laboral.</p>
    </section>

</main>

<!-- MODAL -->
<div class="modal" id="modal">
    <div class="modal-contenido">
        <span class="cerrar" id="cerrar">✖</span>

        <img id="imgModal">

        <div class="info">
            <h2 id="tituloModal"></h2>

            <p>Talla</p>
            <select id="selectTalla">
                <?php for($i=6;$i<=24;$i+=2) echo "<option>$i</option>"; ?>
            </select>

            <p>Brillos (+15.000)</p>
            <label class="switch">
                <input type="checkbox" id="switchBrillo">
                <span class="slider"></span>
            </label>

            <button class="ordenar" id="ordenar">Ordenar por WhatsApp</button>
        </div>
    </div>
</div>

<a class="whatsapp-float" href="https://wa.me/3203751393" target="_blank">
    <img src="img/whatsLogo.png" class="whats-logo">
    WhatsApp
</a>

<script src="js/animaciones.js"></script>
</body>
</html>
