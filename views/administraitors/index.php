<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .card-img-top{height: 300px; object-fit: cover;}
    .card-img-top:hover{width: 110%; height: 330px;transition: all 0.5s;}
    .card{overflow: hidden;}
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
  <div class="row">
    <div class="col-sm-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./public/images/a2.jpg" alt="Title">
          <div class="card-body">
            <h4 class="card-title">Accesorios</h4>
            <a href="./administraitor/accesories/" class="btn btn-success">Ingresar</a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./public/images/sedes.jpg" alt="Title">
          <div class="card-body">
            <h4 class="card-title">Sedes</h4>
            <a href="./administraitor/sedes/" class="btn btn-success">Ingresar</a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./public/images/yates.webp" alt="Title">
          <div class="card-body">
            <h4 class="card-title">yates</h4>
            <a href="./administraitor/yachts/" class="btn btn-success">Ingresar</a>
          </div>
        </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-sm-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./public/images/agenda.jpg" alt="Title">
          <div class="card-body">
            <h4 class="card-title">Agendamiento</h4>
            <a href="./administraitor/quotes/" class="btn btn-success">Ingresar</a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./public/images/ventas.avif" alt="Title">
          <div class="card-body">
            <h4 class="card-title">Ventas</h4>
            <a href="./administraitor/sales/" class="btn btn-success">Ingresar</a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./public/images/servicios.jpg" alt="Title">
          <div class="card-body">
            <h4 class="card-title">servicios</h4>
            <a href="./administraitor/services/" class="btn btn-success">Ingresar</a>
          </div>
        </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-sm-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./public/images/mecanicos.webp" alt="Title">
          <div class="card-body">
            <h4 class="card-title">Mecanicos</h4>
            <a href="./administraitor/mechanics/" class="btn btn-success">Ingresar</a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./public/images/usuarios.jpg" alt="Title">
          <div class="card-body">
            <h4 class="card-title">Usuarios</h4>
            <a href="./administraitor/users/" class="btn btn-success">Ingresar</a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./public/images/marcas.jpg" alt="Title">
          <div class="card-body">
            <h4 class="card-title">Marcas</h4>
            <a href="./administraitor/brands/" class="btn btn-success">Ingresar</a>
          </div>
        </div>
    </div>
  </div>
</div>

</body>
</html>
