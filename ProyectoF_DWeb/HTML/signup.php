<?php include "head.html"; ?>

<body>
    <div class="contenedor">
    <?php include "header-html5.html"; ?>

    <main>
        <div class="container">
            <h3>Registrarse</h3><br><br>
            <form action="../PHP/add_user.php" method="POST">
                <label for="nombre">Nombre *</label>
                <input type="text" id="nombre" name="name" class="form-control" required placeholder="Ej: Ludovico">
                <label for="apellido">Apellido *</label>
                <input type="text" id="apellido" name="lastName" class="form-control" required placeholder="Ej: P. Luche">
                <label for="email">Correo Electrónico *</label>
                <input type="email" id="email" name="email" class="form-control" required placeholder="ejemplo@dominio.com">
                <label for="pwd">Contraseña *</label>
                <input type="password" id="pwd" name="password" class="form-control" required placeholder="Usa letras, números y caracteres esp.">

                <button type="submit" class="btn btn-default">Regístrate</button>
            </form>
        </div>
    </main>

    <?php include "footer.html"; ?>          <!-- Incluye la plantilla del footer-->
</body>