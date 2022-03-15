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
$message= '';

if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql= "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password= password_hash($_POST['password'], PASSWORD_BCRYPT);   //sifrar contraseña 
    $stmt->bindParam(':password', $password);

    if($stmt->execute()){
        $message = 'Usuario creado satisfactoriamente';
    } else {
        $message = 'Ocurrió un error creando su contraseña';
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

<?php if(!empty($message)): ?>
<p><?= $message ?></p>
<?php endif; ?>

<h1>Resgistrarse</h1>
<span> o <a href="login.php">Iniciar Sesión</a> </span>
    
    <form action="signup.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su Email">
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <!-- <input type="password" name="password" placeholder="Confirmar contraseña">-->
        
        <input type="submit" value="Enviar">
    </form>
</body>

</html>