<?php 

$dbhost = "localhost";
$dbname = "producto";
$dbuser = "root";
$dbpass = "";

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql ="SELECT id, nombreCategoria from categoria";

$q = $conn->prepare($sql);
$resultado = $q->execute();

$categorias = $q->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>FILTRO DE PRODUCTOS POR CATEGORIA
<form action="service.php" method="POST">

SELECCIONE CATEGORIA <select name="idCategoria">
    <?php for($i=0;$i<count($categorias);$i++){
?>
<option value=<?php echo $categorias[$i]["id"]; ?> >
<?php echo$categorias[$i]["nombreCategoria"] ?>
</option>

<?php
    }
    ?>
</select> <br>
<input type="submit" value="GENERAR FILTRO">
   </form>
</body>
</html>