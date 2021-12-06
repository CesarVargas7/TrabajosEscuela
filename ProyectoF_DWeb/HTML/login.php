<?php include "head.html"; ?>
<?php include "log.php"; ?>

<body>
    <div class="contenedor">
        <header>
            <nav>
                <p>Xport</p>
            </nav>
        </header>

        <main>
            <section class="log">
                <h3>Inicia sesión</h3><br><br>
                <form method="post">
                    <label for="email"></label>
                    <input type="text" id="email" name="email" required placeholder="Igresa tu correo">
                    <label for="password"></label>
                    <input type="text" id="password" name="password" required placeholder="Pon tu contraseña">
                    <button type="submit" class="">Entrar</button>
                </form>
            </section>
        </main>
        <footer>
        <?php include "footer.html"; ?>          <!-- Incluye la plantilla del footer-->
        </footer>
</body>