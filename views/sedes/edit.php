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
  <div class="container">
    <div class="card bg-light">
      <div class="card-body">
      <h4 class="card-title">Edicion de proyecto</h4>
      <form action="./update" method="POST">
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Nombre:</label>
          <input type="text" class="form-control" id="name" value="<?php echo $sede['sede']; ?>" placeholder="Edite nombre" name="sede">
          <input type="hidden" value="<?php echo $sede['id']; ?>" name="id">
        </div>
        <div class="mb-3">
          <label for="information" class="form-label">Direccion:</label>
          <input type="text" class="form-control" id="information" value="<?php echo $sede['direction']; ?>" placeholder="Edite infomación" name="direction">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
