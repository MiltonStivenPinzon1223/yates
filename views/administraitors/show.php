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
    <a class="navbar-user" href="./">Feane</a>
    <a class="navbar-user" href="../../administraitor">Atras</a>
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
        <th scope="col">Tipo de Documento</th>
        <th scope="col">Documento</th>
        <th scope="col">Email</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>

      <tr class="">
        <td><?php echo $user['name'];?></td>
        <td><?php echo $user['type'];?></td>
        <td><?php echo $user['document'];?></td>
        <td><?php echo $user['email'];?></td>
        <td><?php $r = ($user['status'] == 1) ? 'Activo' : 'Desactivado'; echo $r?></td>
        <td><div class="btn-group">
            <a href="<?php echo $user['id'];?>/edit" class="btn btn-success">Editar</a>
            <form action="<?php echo $user['id'];?>/status" method="post">
            <input type="hidden" name="status" value="<?php $r = ($user['status'] == 1) ? '0' : '1'; echo $r?>">
            <input type="submit" class="btn btn-danger" value="<?php $r = ($user['status'] == 1) ? 'Desactivar' : 'Activar'; echo $r?>">
            </form>
          </div></td>
          <?php endforeach; ?>
    </tbody>
  </table>
</div>

</div>
</body>
</html>
