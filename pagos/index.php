<!doctype html>
<html>
<head>
<meta charset="uft-8">
<link rel="stylesheet" type="text/css" href="normalize.css"> 
<link rel="stylesheet" type="text/css" href="estilo.css"> 
<title> pagos </title>
<style>
    table{
        margin: auto;
        width: 300px;
        
    }
    input{
        width: auto;
        margin: 8px 0;
        padding: 5px;
        background: #d9d9d9;
        border-radius: 4px;
    }
</style>
</head>    
<body>
<form action="datosimagen.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
    <td>
<!-- <label for="imagen">Subir comprobante de pago</label></td><tr>-->
    <tr><td colspan="2" style= "text-align:center"> <input type="file" name= "imagen" size="10px"></td></tr>

    <tr><td colspan="3" style= "text-align:center"><input type= "submit" value="Enviar"></td></tr>
</table> 
</form>
</body>    
</html>