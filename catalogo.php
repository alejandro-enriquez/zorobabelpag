
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

</header>      




    <div class="container"> 

    <?php if($mensaje!=''){?>
        <div class="alert alert-success">
        <?php echo $mensaje; ?>
            
            <a href="mostrarCarrito.php" class="badge badge-success">Ver carrito</a>
        </div>
        <?php }?>

        <div class="row">
        <?php
            //
            $sentencia=$pdo->prepare("SELECT * FROM `tblproductos`");
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            // print_r($listaProductos);
        ?>
            <?php foreach($listaProductos as $producto){ ?>
            <div class="col-4">
                <div class="card">
                    <img 
                    title="<?php echo $producto['Nombre']; ?>"
                    alt="<?php echo $producto['Nombre']; ?>"
                    class="card-img-top" 
                    src="<?php echo $producto['Imagen']; ?>"
                    >
                    <div class="card-body">
                    <span><?php echo $producto['Nombre']; ?></span>
                        <h5 class="card-title">$<?php echo $producto['Precio']; ?></h5>
                        <h2 class="card-title"><?php echo $producto['Descuento']; ?>%</h2>
                        <h2 class="card-title"><?php echo $producto['Talla']; ?></h2>
                        <h2 class="card-title"><?php echo $producto['Color']; ?></h2>
                        <h2 class="card-title"><?php echo $producto['Nuevo']; ?></h2>
                        <p class="card-text"><?php echo $producto['Descripcion']; ?></p>
                        
                        <form action="" method="post">      <!--formulario que sirve para enviar la información de la camiseta que se seleccione-->
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
                            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
                        
                        <button class="btn btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">            <!--submit es por un boton de envío-->
                            Agregar al carrito
                        </button>
                        
                        </form>
                
                    </div>
                </div>
            </div>
            
            <?php } ?> 
        </div>
    </div>
<?php
include 'templates/pie.php'
?>