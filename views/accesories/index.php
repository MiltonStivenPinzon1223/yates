<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .img-table{width: 120px; height: 100px; object-fit: cover;}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">Feane</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <a href="" class="btn btn-dark">Salir</a>
    </div>
  </div>
</nav>
  
<div class="container mt-5">
<div class="table-responsive">
  <table class="table table-dark text-center">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Fotografia</th>
        <th scope="col">Informacion</th>
        <th scope="col">Precio</th>
        <th scope="col">Disponibilidad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($accesories as $accesory) : ?>

      <tr class="">
        <td><?php echo $accesory['name'];?></td>
        <td><img src="../../<?php echo $accesory['photo'];?>" class="img-table" alt=""></td>
        <td><?php echo $accesory['information'];?></td>
        <td>$ <?php echo $accesory['price'];?>.000</td>
        <td><?php echo $accesory['stock'];?></td>
        <td><div class="btn-group">
            <a href="<?php echo $accesory['id'];?>/edit" class="btn btn-success">Editar</a>
            <a href="" class="btn btn-danger">Eliminar</a>
          </div></td>
      </tr>
          <?php endforeach; ?>
    </tbody>
  </table>
</div>

</div>
</body>
</html>