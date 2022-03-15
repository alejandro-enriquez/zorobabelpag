<!--<!DOCTYPE html>
<html>
    <head>
        <title>ZOROBABEL</title>
        <meta charset="utf-8">
        <meta name="keywords" content="camisetas, ropa">
        <meta name="description" content="Descripción de la empresa ZOROBABEL">
        <meta name="author" content="Alejandro Enríquez">
        <meta name="robots" content="index">
        <link rel="icon" href="../zorobabelpag/img/logo.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="archivo.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="normalize.css"> 
        <link rel="stylesheet" type="text/css" href="estilo.css"> -->
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

    if (isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE id= :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if(count($results) > 0) {
            $user = $results;
        }
    }
?>


<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
    


    <div class="banner">
        <div class="info">
            <h2>BIENVENIDOS</h2>
            <a href="micuenta.html">
            <button>SHOP MEN</button>
            </a>
        </div>
    </div>   
    </header>  
        
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <div class="texto"> <h2><b>DESCUBRE</b> <br> <b>LA COLECCIÓN</b></h2>
        </div>    
        <a href="https:wa.link/jisuip" class="botonwapp" target="blank">
            <i class="iconowapp" ><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg></i>
        </a>
        <div>    
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6"><img src="../zorobabelpag/img/estilos/redondo5.jpg"><h3>Camiseta cuello redondo</h3><h3>$32.500 COP</h3></div>
                    <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6"><img src="../zorobabelpag/img/estilos/militar3.jpg"><h3>Camiseta cuello militar</h3><h3>$45.000 COP</h3></div>
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12"><img src="../zorobabelpag/img/estilos/pololineas1.jpg"><h3>Camiseta tipo polos líneas</h3><h3>$45.000 COP</h3></div>
                </div>    
            </div>
        </div>
        <div>    
            <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12"><img src="../zorobabelpag/img/estilos/polo2.jpg"><h3>Camiseta tipo polo</h3><h3>$45.000 COP</h3></div>
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12"><img src="../zorobabelpag/img/estilos/cpolo2.jpg"><h3>Camibuso tipo polo Equal</h3><h3>$49.000 COP</h3></div>
                    <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12"><img src="../zorobabelpag/img/estilos/cmilitar1.jpg"><h3>Camibuso cuello militar</h3><h3>$49.000 COP</h3></div>
                </div>    
            </div>
        </div>
        <div class="texto"><h2><b>DISEÑOS NOVEDOSOS</b></div>
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12"><img src="../zorobabelpag/img/doblado/doblado1.jpg"><h4>Camiseta equal</h4></div>
                    <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12"><img src="../zorobabelpag/img/doblado/doblado2.jpg"><h4>Cuello redondo</h4></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 imagencentrada"><img src="../zorobabelpag/img/estilos/militar6.jpg"></div>    
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12"><img src="../zorobabelpag/img/doblado/doblado3.jpg"><h4>Cuello militar</h4></div>
                    <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12"><img src="../zorobabelpag/img/doblado/doblado4.jpg"><h4>Tres colores</h4></div>
                </div>
            </div>
        </div>
        <div>    
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 texto-inferior">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12"><svg width="100%" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg>
                        <h4><b>PROCESO DE CAMBIO SENCILLO</b></h4><h4>Tenemos un proceso de cambio muy rápido y sencillo. Para más información visita la zona de políticas.</h4>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12"><svg width="100%" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                        <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/></svg>
                        <h4><b>PAGOS SEGUROS</b></h4><h4>Tus datos y transacciones están seguros en nuestra plataforma.</h4>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12"><svg width="100%" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                        <h4><b>CONTACTO</b></h4><h4>En caso de requerirlo, contamos con atención personalizada, nuestro equipo te responderá en la mayor brevedad posible.</h4>
                    </div>
                </div>    
            </div>
        </div>
        
<form action="mostrarCarrito.php" method="get">
COLORES<br>
    <label>Color</label>
    <input type="text" value="nom">
    <input type="text" value="ed">
    <input type="submit"  value="Enviar">
</form>


<?php if(!empty($user)):?>
<br> Bienvenido <?= $user['email'] ?>
<br> Ingresaste a la sesión
<a href="logout.php">Cerrar sesión</a>
<?php else: ?> 
    <?php
        include 'templates/pie.php'
    ?>
<?php endif; ?>
        
