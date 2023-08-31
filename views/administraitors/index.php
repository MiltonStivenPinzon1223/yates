<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/responsive.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .card-img-top{height: 300px; object-fit: cover;}
    .card-img-top:hover{width: 110%; height: 330px;transition: all 0.5s;}
    .card{overflow: hidden;}
  </style>
</head>
<body>

<header class="header_section header-administraitor border-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand navbar-administrator" href="./">
            <span>
              Feane
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>
          <?php
$url = $_SERVER["REQUEST_URI"];
$url = str_replace("/yates","",$url);
?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
              <li class="nav-item nav-itemAdmin" >
                <a class="nav-link" href="./">Home</a>
              </li>
              <li class="nav-item nav-itemAdmin">
                <a class="nav-link" href="quotes">Quotes</a>
              </li>
              <li class="nav-item nav-itemAdmin">
                <a class="nav-link" href="about">About</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
  
<div class="container my-5">
  <div class="row">
    <div class="col-sm-4">
        <div class="card text-white">
          <img class="card-img-top" src="./public/images/a2.jpg" alt="Title">
          <div class="card-body">
            <a href="./administraitor/accesories/" class="btn"><h4 class="card-title">Accesorios</h4></a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white">
          <img class="card-img-top" src="./public/images/sedes.jpg" alt="Title">
          <div class="card-body">
            <a href="./administraitor/sedes/" class="btn"><h4 class="card-title">Sedes</h4></a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white">
          <img class="card-img-top" src="./public/images/yates.webp" alt="Title">
          <div class="card-body">
            <a href="./administraitor/yachts/" class="btn"><h4 class="card-title">Yates</h4></a>
          </div>
        </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-sm-4">
        <div class="card text-white">
          <img class="card-img-top" src="./public/images/agenda.jpg" alt="Title">
          <div class="card-body">
            <a href="./administraitor/quotes/" class="btn"><h4 class="card-title">Agendamiento</h4></a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white">
          <img class="card-img-top" src="./public/images/ventas.avif" alt="Title">
          <div class="card-body">
            <a href="./administraitor/sales/" class="btn"><h4 class="card-title">Ventas</h4></a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white">
          <img class="card-img-top" src="./public/images/servicios.jpg" alt="Title">
          <div class="card-body">
            <a href="./administraitor/services/" class="btn"><h4 class="card-title">Servicios</h4></a>
          </div>
        </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-sm-4">
        <div class="card text-white">
          <img class="card-img-top" src="./public/images/mecanicos.webp" alt="Title">
          <div class="card-body">
            <a href="./administraitor/mechanics/" class="btn"><h4 class="card-title">Mecanicos</h4></a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white">
          <img class="card-img-top" src="./public/images/usuarios.jpg" alt="Title">
          <div class="card-body">
            <a href="./administraitor/users/" class="btn"><h4 class="card-title">Usuarios</h4></a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white">
          <img class="card-img-top" src="./public/images/marcas.jpg" alt="Title">
          <div class="card-body">
            <a href="./administraitor/brands/" class="btn"><h4 class="card-title">Marcas</h4></a>
          </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>
