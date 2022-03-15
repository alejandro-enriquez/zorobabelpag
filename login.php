<?php 
    session_start();
?>

<?php 
    $server= 'localhost';
    $username= 'root';
    $password= '';
    $database= 'tienda2';


    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
    } catch(PDOException $e) {
        die('Connected faild: '.$e->getMessage());
    }
?>

<?php 

    if(!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message= '';

        if(count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            header('Location: /zorobabelpag');  //ruta inicial de la aplicación 
        } else {
            $message= 'El usuario o la contraseña no coinciden';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"> 
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <span> o <a href="signup.php">Registrarse ahora</a></span>

    <?php if (!empty($message)) : ?>
    <p><?= $message ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su Email">
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="submit" value="Enviar">
    </form>

    <form action="mostrarCarrito.php" method="get">
COLORES<br>
    <label>Color</label>
    <input type="text" value="color1">
    <input type="text" value="color2">
    <input type="submit"  value="Enviar">
</form>
</body>

</html>