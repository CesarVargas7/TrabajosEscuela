<?php include "head.html"; ?>

<body>
    <div class="contenedor">
        <header>
            <nav>
                <p>Xport</p>
            </nav>
        </header>

        <main>
            <h3>Inicia sesión</h3><br><br>
            <form action="../PHP/add_user.php">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="name" required placeholder="Ej: Ludovico">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="lastName" required placeholder="Ej: P. Luche">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required placeholder="ejemplo@dominio.com">
                <label for="pwd">Contraseña</label>
                <input type="password" id="pwd" name="password" required placeholder="Usa letras, números y caracteres esp.">

                <button type="submit">Regístrate</button>
            </form>
        </main>
        <footer>
            <?php include "footer.html"; ?>          <!-- Incluye la plantilla del footer-->
        </footer>
</body>