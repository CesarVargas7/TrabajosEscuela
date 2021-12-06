<?php 
session_start();
include "head.html";
if (array_key_exists('name', ))
?>                                <!-- Incluye la plantilla del head y datos del comienzo del codigo-->

    <body>
        <div class="contenedor">
            <header>
                <nav>
                    <p><a href="index.php">Xport</a></p>
                    <ul class="menu">
                        <li><a href="chat.php"><span><img class="icono" src="../IMAGENES/Iconos/chat.png"></span>Chat</a></li>
                        <li><a href="categoria.php"><span><img class="icono" src="../IMAGENES/Iconos/categorias.png"></span>Departamentos</a></li>                
                        <li><a href="perfil.php"><span><img class="icono" src="../IMAGENES/Iconos/perfil.png"></span>Perfil</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h2>Descubre lo que debes saber del mundo del deporte</2><br><br>
                <p>¿Sabías que el deporte es la actividad física, ejercida como juego o competición, cuya práctica supone entrenamiento y sujeción a normas? esto según la RAE.</p> <hr>
                <p>¿No sabes dónde encontrar variedad de equipo deportivo?</p><br>
                <section class="secciones"><a href="https://www.adidas.mx/"><img class ="img_index" src="../IMAGENES/Index/adidas.png"></a></section><br>                       <!-- link a Adidas -->
                <p>¿Te gustan los deportes digitales?</p><br>
                <section class="secciones"><a href="https://www.ea.com/es-mx"><img class ="img_index" src="../IMAGENES/Index/ea.png"></a></section><br>                       <!-- link a EAsports -->
                <p>¿Te gusta estar al tanto de las noticias mas relevantes del deporte?</p><br>
                <section class="secciones"><a href="https://www.espn.com.mx/"><img class ="img_index" src="../IMAGENES/Index/espn.png"></a></section><br>                       <!-- link a ESPN -->
                <p>¿No te gusta la merca de Adidas?</p><br>
                <section class="secciones"><a href="https://www.nike.com/mx/"><img class ="img_index" src="../IMAGENES/Index/nike.png"></a></section><br>                       <!-- link a NIKE -->
                <p>¿Te acalambraste entrenando?</p><br>
                <section class="secciones"><a href="https://www.walmart.com.mx/cuidado-de-la-salud/spa-y-masaje/masajeadores-electricos/pistola-masajes-electrica-recargable-rehabilitacion-musculos-nanofort-mkz-pmasaje_00750228321589?gclid=Cj0KCQiA15yNBhDTARIsAGnwe0WoJa9ubEoO1FW7U981s4YdYWJCl2uCrKAfyeakuOSmIzv_R0CTFOwaAo7VEALw_wcB"><img class="img_index" src="../IMAGENES/Index/masaje.png"></a></section><br>                       <!-- link a masajeador -->
            </main>
            <footer>
                <?php include "footer.html"; ?>          <!-- Incluye la plantilla del footer-->
            </footer>
        </div>
    </body>
</html>