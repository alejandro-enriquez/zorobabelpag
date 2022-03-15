
<?php 
require 'conect.php';

$Familia = $_POST['Familia'] ;
$Categoria = $_POST['Categoria'] ;
$Subcategoria = $_POST['Subcategoria'] ;
$Tipo = $_POST['Tipo'] ;
$nombre = $_POST['Nombre'] ;
$Precio = $_POST['Precio'] ;
echo $Precio;

$insertar= "INSERT INTO tblproductos (Familia, Categoria, Subcategoria, Tipo, Nombre, Precio) VALUE ('$Familia', '$Categoria', '$Subcategoria', '$Tipo','$nombre','$Precio')"; 
$query = mysqli_query($conectar, $insertar);
if($query){
    echo "correcto";
} else{
    echo "incorrecto";
}

