<?php 

    session_start();
    
    // initialising variables

    $nombre = "";
    $correo = "";

    $errors = array();

    // conecct to db
    $db = mysqli_connect('localhost', 'root', 'root', 'loginphp') or die("No se ha conectado a la base de datos");

    // register users

    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $correo = mysqli_real_escape_string($db, $_POST['correo']);
    $cedula = mysqli_real_escape_string($db, $_POST['cedula']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Register boleta 1
    $b1nombre = mysqli_real_escape_string($db, $_POST['b1nombre']);
    $b1cedula = mysqli_real_escape_string($db, $_POST['cedulab1']);

    // form validation
    if(empty($nombre)){
        array_push($errors, "Nombre es requerido");
    };
    if(empty($correo)){
        array_push($errors, "correo es requerido");
    };
    if(empty($cedula)){
        array_push($errors, "cedula es requerido");
    };
    if(empty($b1nombre)){
        array_push($errors, "El nombre de su primera base es requerido");
    };
    if(empty($b1cedula)){
        array_push($errors, "La cédula de su primera base es requerido");
    };

    // Validar si las cedulas esta en la base de datos
    $user_check_query = "SELECT * FROM  usuarios WHERE cedula = '$cedula' or b1cedula = '$b1cedula' LIMIT 1";

    $results = mysqli_query($db, $user_check_query);
    $cedulas = mysqli_fetch_assoc($results);

    if($cedulas){
        if($cedulas['cedula'] === $cedula){
            array_push($errors, "Su cédula ya ha sido registrada");
        }
        if($cedulas['b1cedula'] === $b1cedula){
            array_push($errors, "La cédula de la primera base ya ha sido registrada");
        }
    }

    // Registrar al usuario si no hay errores
    if(count($errors) == 0){
        // encriptar la contraseÑa
        $password = md5($password); 
        $query = "INSERT INTO usuarios (nombre, correo, cedula, password, b1nombre, b1cedula) VALUES ('$nombre' '$correo' '$password' '$b1nombre' '$b1cedula')";

        mysqli_query($db, $query);

        $_SESSION['nombre'] = $nombre;
        $_SESSION['success'] = "Has sido registrado";

        header('location: index.php');
    }

?>