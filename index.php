<?php 

    session_start();

    if(isset($_SESSION['nombre'])){
        $_SESSION['msg'] = "Has sido registrado";
        header("location: login.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($SESSION['username']);
        header("location : login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de inicio</title>
</head>
<body>
    
    <h1>Adquiere tus boletas</h1>
    <?php 
    if(isset($_SESSION['success'])) : 
    ?>

    <div>
        <h3>
            <?php 
            
            echo $_SESSION['success'];
            unset($_SESSION['success']);

            ?>
        </h3>
    </div>
    <?php endif ?>

    <!-- Cuando el usuario este registrado mostrar su  informacion -->

    <?php if(isset($_SESSION['nombre'])) : ?>

    <h3>Bienvenido <strong> <?php echo $_SESSION['nombre']; ?> </strong></h3>

    <button> <a href="index.php?logout='1'"></a> </button>

    <?php endif ?>

</body>
</html>