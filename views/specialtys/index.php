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
    <a class="navbar-brand" href="../../administraitor">Atras</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <a href="" class="btn btn-dark">Salir</a>
    </div>
  </div>
</nav>
  
<div class="container mt-5">
  <a href="./create" class="btn btn-success">Crear</a>
<div class="table-responsive">
  <table class="table table-dark text-center">
    <thead>
      <tr>
        <th scope="col">Especialidad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($specialtys as $specialty) : ?>

      <tr class="">
        <td><?php echo $specialty['specialty'];?></td>
        <td><div class="btn-group">
        <form action="./edit" method="post">
            <input type="hidden" name="id" value="<?php echo $specialty['id'];?>"><input type="submit" value="Editar" class="btn btn-success">
          </form>
          <form action="./delete" method="post">
            <input type="hidden" name="id" value="<?php echo $specialty['id'];?>"><input type="submit" value="Eliminar" class="btn btn-danger">
          </form>
          </div></td>
          <?php endforeach; ?>
    </tbody>
  </table>
</div>

</div>
</body>
</html>
