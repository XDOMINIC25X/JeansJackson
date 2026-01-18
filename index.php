<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header class="header">
        <div class="header-container">
            <img src="img/logo.png" class="logo" alt="Logo">
            <nav class="menu">
                <a href="index.php">Inicio</a>
                <a href="catalogo.php">Catálogo</a>
                <a href="#quienes-somos">Quienes somos</a>
            </nav>
        </div>
    </header>

    <main class="main">

        <!-- HERO -->
        <section class="hero">
            <h1>JEANS DRILL</h1>
            <a class="btn" href="#productos">Ver productos</a>
        </section>

        <!-- PRODUCTOS DESTACADOS -->
        <section id="productos" class="seccion">
            <h2>Top Productos</h2>

            <div class="grid-productos">
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    echo '
                    <div class="producto destacado" data-id="'.$i.'">
                        <img src="img/producto'.$i.'.jpeg" alt="Producto '.$i.'">
                        <h3>Producto '.$i.'</h3>
                    </div>';
                }
                ?>
            </div>

            <div class="ver-mas">
                <a href="catalogo.php">Ver catálogo completo</a>
            </div>
        </section>

        <!-- QUIENES SOMOS -->
        <section id="quienes-somos" class="empresa">
            <h2>Quienes somos</h2>
            <p>Somos Jeans jackson, los mejores jeans en Colombia...</p>
        </section>
    </main>

    <!-- MODAL -->
    <div class="modal" id="modal">
        <div class="modal-contenido">
            <span class="cerrar" id="cerrar">X</span>

            <div class="modal-img">
                <img id="imgModal" src="" alt="Producto">
            </div>

            <div class="info">
                <h2 id="tituloModal">Producto</h2>

                <div class="tallas">
                    <p>Elige la talla:</p>
                    <select id="selectTalla">
                        <?php
                        for ($t = 6; $t <= 24; $t += 2) {
                            echo '<option value="'.$t.'">'.$t.'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="brillo">
                    <p>Brillos (15.000 COP extra):</p>
                    <label class="switch">
                        <input type="checkbox" id="switchBrillo">
                        <span class="slider"></span>
                    </label>
                </div>

                <button class="ordenar" id="ordenar">Ordenar por WhatsApp</button>
            </div>
        </div>
    </div>

    <!-- WHATSAPP -->
    <a class="whatsapp-float" href="https://wa.me/3203751393" target="_blank">
        <img class="whats-logo" src="img/whatsLogo.png" alt="WhatsApp">
        WhatsApp
    </a>

    <!-- JS -->
    <script src="js/animaciones.js"></script>
</body>
</html>
