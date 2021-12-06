<?php session_start(); ?>
<?php include "head.html"; ?>   

<body>
        <div class="contenedor">
            <header>
                <nav>
                    <p><a href="index.php">Xport</a></p>
                    <ul class="menu">
                        <li><a href="chat.php"><span><img class="icono" src="../IMAGENES/Iconos/chat.png"></span>Chat</a></li>
                        <li><a href="categoria.php"><span><img class="icono" src="../IMAGENES/Iconos/categorias.png"></span>Departamentos</a></li>               
                        <li><a href="login.php"><span><img class="icono" src="../IMAGENES/Iconos/salir.png"></span>Salir</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <?php
                    if(array_key_exists('name', $_SESSION)) {
                ?>
                        $nombre = $_SESSION['name'];
                        <h2>Hola <?php echo $nombre;?></h2>                   <!-- Nombre completo del usuario -->
                        <ul>
                            <li><?php echo $_SESSION['email']; ?></li>
                            <li><a href="login.php">Cerrar sesión</a></li>
                        </ul>
                        <button onclick="">Eliminar cuenta</button>
                <?php
                    }
                    else {
                        echo "Por favor inicie sesión.";
                    }
                    ?>
            </main>
            <footer>
                <?php include "footer.html"; ?>          <!-- Incluye la plantilla del footer-->
            </footer>
        </div>
    </body>
</html>