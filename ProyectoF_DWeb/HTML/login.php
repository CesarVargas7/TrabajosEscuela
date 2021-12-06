<?php include "head.html"; ?>
<?php include "../php/log.php"; ?>

<body>
    <div class="contenedor">
    <?php include "header-html5.html"; ?>

        <main>
            <section class="log container">
                <h3>Iniciar sesión</h3><br><br>
                <form method="post">
                    <div class="row">
                        <label for="email">Correo *</label>
                        <input type="text" id="email" name="email" class="form-control" required placeholder="Igresa tu correo">
                        <label for="password">Contraseña *</label>
                        <input type="text" id="password" name="password" class="form-control" required placeholder="Pon tu contraseña">
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-default">Entrar</button>
                    <div>
                </form>
            </section>
        </main>
        
        <?php include "footer.html"; ?>          <!-- Incluye la plantilla del footer-->
</body>