<?php
include('config/bd.php');
$result = mysqli_query($coon, 'select * from productos');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">   
<title>Crud</title>
<style>
    .n{
        margin-top: 100px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-Ig=3">
                <form action="add.php" method="post">
                    <h1><strong>Producto</strong></h1>
                    <br>
                    <input type="text" class="form-control" placeholder="Producto" required name="Producto">
                    <br>
                    <input type="submit" value="Agregar" class="btn btn-primary">
                </form>
                </div>
            <div class="col-Ig=8">
            <table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($result as $row){
  ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row ['Producto']; ?></td>
      <td><a href="edit.php?id=<?php echo $row['Cod_Producto']; ?> "class="btn btn-primary">Editar</a></td>
      <td><a href="delite.php?id=<?php echo $row['Cod_Producto']; ?>" class="btn btn-danger">Eliminar</a></td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>

  </div>

     </div>
    
    </div>
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>