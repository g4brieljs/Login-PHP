<?php include('./server/server.php') ?>


<?php require './partials/header.php' ?>
<body>
    
    <div class="container">
        
        <div class="header">
            <h2>Iniciar sesión</h2>
        </div>

        <form action="login.php" method="post">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required>
            </div>

            <div>
                <label for="password">Contraseña: </label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" name="login_user">Iniciar sesión</button>

            <p>¿Aún no tienes premio? <a href="register.php"><b>Registrarse</b></a></p>

        </form>

    </div>

    <?php require './partials/body.php' ?>
</body>
</html>