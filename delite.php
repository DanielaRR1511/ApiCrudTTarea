<?php
include('config/bd.php');

$id = $_GET['id'];
$query = mysqli_query($coon,"delete from Productos where (Cod_Producto = '$id')");

if($query){
    header('location: index.php');
}
?>