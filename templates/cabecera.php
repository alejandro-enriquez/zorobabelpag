<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="keywords" content="camisetas, ropa">
    <meta name="description" content="Descripción de la empresa ZOROBABEL">
    <meta name="author" content="Alejandro Enríquez">
    <meta name="robots" content="index">
    <link rel="icon" href="../diseñoweb/img/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="archivo.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="normalize.css"> 
    <link rel="stylesheet" type="text/css" href="estilo.css"> 
</head>
<body>

<header>
            <div class="heade">
                <div class="encabezado">
                    <h1>ZOROBABEL</h1>
                </div>
                <div class="carrito"><li><a class="nav-link" href="mostrarCarrito.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg> <?php 
                        echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?></a></li>
                </div>  
                <div class="barramenu">
                    <input  type="checkbox" id="btn-menu">
                    <label for="btn-menu"><img src="../diseñoweb/img/menu.png">
                    </label>
                    <nav class="menu">
                        <ul>
                            <li><a href="index.php">INICIO</a> </li>
                            <li><a href="catalogo.php">CATÁLOGO</a> </li>
                            <li><a href="admin.php">POLÍTICAS</a> </li>
                            <li><a href="#">CONTACTO</a> </li>
                            <li><a href="login.php">INICIAR SESIÓN</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>      
                
<!--el head quedó abierto, así que en los otros archivos se debe cerrarlo-->            