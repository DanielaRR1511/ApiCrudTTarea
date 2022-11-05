<?php
include ('config/bd.php');

if(!empty($_POST['Producto'])){
    $Producto = $_POST['Producto'];
    $query = mysqli_query($coon,"Insert into Productos(Producto) values('$Producto')");

    if($query){
        header('location: index.php');
    }
}

?>