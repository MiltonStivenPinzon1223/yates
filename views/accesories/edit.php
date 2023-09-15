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
          <label for="name" class="form-label">name:</label>
          <input type="text" class="form-control" id="name" value="<?php echo $accesory['name']; ?>" placeholder="Edite nombre" name="name">
          <input type="hidden" value="<?php echo $accesory['id']; ?>" name="id">
        </div>
        <div class="mb-3">
          <label for="information" class="form-label">Infomación:</label>
          <input type="text" class="form-control" id="information" value="<?php echo $accesory['information']; ?>" placeholder="Edite infomación" name="information">
        </div>
        <div class="mb-3 mt-3">
          <label for="price" class="form-label">Precio:</label>
          <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="price" value="<?php echo $accesory['price']; ?>" placeholder="Edite precio" name="price">
            <span class="input-group-text">.000</span>
          </div>
        </div>
        <div class="mb-3">
          <label for="stock" class="form-label">Cantidad:</label>
          <input type="Cantidad" class="form-control" id="stock" value="<?php echo $accesory['stock']; ?>" placeholder="Edite Cantidad" name="stock">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
