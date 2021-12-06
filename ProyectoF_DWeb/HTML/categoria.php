<?php include "head.html"; ?>                            <!-- Incluye la plantilla del head y datos del comienzo del codigo-->

    <body>
        <div class="contenedor">
            <header>
                <nav>
                    <p><a href="index.php">Xport</a></p>
                    <ul class="menu">
                        <li><a href="chat.php"><span><img class="icono" src="../IMAGENES/Iconos/chat.png"></span>Chat</a></li>                  
                        <li><a href="perfil.php"><span><img class="icono" src="../IMAGENES/Iconos/perfil.png"></span>Perfil</a></li>
                        <li><a href="login.php"><span><img class="icono" src="../IMAGENES/Iconos/salir.png"></span>Salir</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <table id="tablaCategorias">
                    <tr>
                        <td><a href="box.php"><img src="../IMAGENES/Categorias/box.png">Box</a></td>
                        <td><a href="fucho.php"><img src="../IMAGENES/Categorias/cr7.png">Fucho</a></td>
                        <td><a href="gimnasia.php"><img src="../IMAGENES/Categorias/gimnasia.png">Gimnasia Olimpica</a></td>
                    </tr>
                    <tr>
                        <td><a href="halterofilia.php"><img src="../IMAGENES/Categorias/halterofilia.png">Halterofilia</a></td>
                        <td><a href="lucha.php"><img src="../IMAGENES/Categorias/lucha.png">Lucha grecoromana</a></td>
                        <td><a href="tkd.php"><img src="../IMAGENES/Categorias/tkd.png">Tae Kwon Do</a></td>
                    </tr>  
                </table>
            </main>       
                <?php include "footer.html"; ?>          <!-- Incluye la plantilla del footer-->
        </div>
    </body>
</html>