<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <?php 

    $dbhost = "localhost";
    $dbname = "producto";
    $dbuser = "root";
    $dbpass = "";

    $idCategoria = $_REQUEST ["idCategoria"];


    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);


    $sql = "SELECT nombreProducto,precioProducto from tipoproductos WHERE idCategoria = $idCategoria";
    

    $q = $conn->prepare($sql);
    $resultado = $q ->execute();
    
    $consulta=$q->fetchAll();

    for($i = 0;$i<count($consulta);$i++){
        echo $consulta[$i]["nombreProducto"]; ?> <br> <?php
        echo $consulta[$i]["precioProducto"]; ?> <br> <?php
    }
  
        ?>
</body>
</html>