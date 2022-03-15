
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
</header>


<h2>LISTA DE COMPRAS</h2>

<?php if(!empty($_SESSION['CARRITO'])) { ?>

<div class="col-12">
<div class="row">   
<div class="col-8"><table class="table">
    <tbody>
    <thead class="thead-dark">
        <tr>
            <th width=40% class="text-center" style="padding: 0;">Producto</th>
            <th width=15% class="text-center" style="padding: 0;">Cantidad</th>
            <th width=20% class="text-center" style="padding: 0;">Precio</th>
            <th width=20% class="text-center" style="padding: 0;">Total</th>
            <th width=5% class="text-center" style="padding: 0;">--</th>
    </thead> 

        </tr>
        <?php $total=0;?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
        <tr>
            <td width=40% class="text-center" style="padding: 1px;"><?php echo $producto['NOMBRE']?></td>
            <td width=15% class="text-center" style="padding: 1px;"><?php echo $producto['CANTIDAD']?></td>
            <td width=20% class="text-center" style="padding: 1px;"><?php echo $producto['PRECIO'] ?></td>
            <td width=20% class="text-center" style="padding: 1px;"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'])?></td>
            <td width=5% class="text-center" style="padding: 1px;">
                
            <form action="" method="post">
            <input type="hidden" 
            name="id" 
            id="id" 
            value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
            
                <button 
                class="btn btn-danger" 
                type="submit"
                style="padding: 0px 7px 1px 8px; border-radius:50%"
                name="btnAccion"
                value="Eliminar"
                >x</button>
            </form>    
            </td>
        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);?>
        <?php } ?> 
        <tr>
            <td class="text-center" colspan="3" style="padding: 0;"><b>Sub Total</b></td>
            <td class="text-center" style="padding: 0;"><b>$<?php echo number_format($total);?></b></td>
            <td ></td>
        </tr>
        
    </tbody>
</table>
</div>
<div class="col-4" style="padding:20px; background: #e0e0e0" >  
    <button style="width: 50%;">Envío</button><button style="width: 50%;">Contraentrega</button>
        <h6> Sub Total Producto $<?php echo number_format($total,2);?></h6>
        <h6>Envío $ <?php echo number_format(10000) ?> </h6>
        <h6><b>Total $<?php echo number_format($total+10000) ?></b></h6>
        <button><h6>  <br>Transderencia Bancolombia</h6></button>
        <button><h6>  <br>Nequi</h6></button>
        <button><h6>  <br>Daviplata</h6></button>

        <?php
        include 'pagos/index.php';
        ?>  
        <h6>Otros medios de pago PayU</h6>
        <tr>
            <td colspan="5"></td>
            <form action="pagar.php" method="post">
            <div class="alert alert-success">
                <div class="form-group">
                <label for="my-input">Correo electrónico</label>
                    <input id="imail" 
                    name="email" 
                    class="form-control" 
                    type="email"
                    placeholder="Por favor escribe tu correo"
                    required>   <!--para que lo pida de forma obligatoria--> 
                </div>

                <small id="emaiHelp"
                class="form-text text-muted">
                En este correo donde recibiras la confirmación de pago
                </small>
            </div>
                <button class="btn btn-primary btn-block"  type="submit" 
                name="btnAccion"
                value="proceder">
                    PAGAR 
                </button>    
            </form>
            
        </tr>

        <h4> Envío contraentrega</h4>
        <h6> Sub Total Producto $<?php echo number_format($total,2);?></h6>
        <h6>Envío $ <?php echo number_format(14000) ?> </h6>
        <h6><b>Total $<?php echo number_format($total+14000) ?></b></h6>

        

</div>

</div>

<?php }else{ ?>
<div class="alert alert-success">
    No hay productos en el carrito...
</div>
<?php }?>
</div> 


<?php 
$color1='1';
$color2='a';



if($color1<$color2){?>
<style>
.boton-color{
    color: black; 
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #<?php echo $color2;?>00;
    <?php } ?>
</style>

<button type="button" class="btn boton-color"></button>


<?php include 'templates/pie.php';?>