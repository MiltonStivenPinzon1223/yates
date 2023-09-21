<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .img-table{width: 120px; height: 100px; object-fit: cover;}
  </style>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
  <div class="row">
    <div class="col-md-9 col-sm-12">
        <canvas id="yachts" style="width:100%;"></canvas>
        <canvas id="accessories" style="width:100%;"></canvas>
        <canvas id="type" style="width:100%;"></canvas>
    </div>
<div class="col-md-3 col-sm-12">
<div class="row">
<h3>Ventas de articulos</h3>
<?php foreach ($sales_accesories as $sales_accesorie) : ?>
  <div class="col-sm-12">
    <div class="card bg-light">
      <div class="card-body">
        <h4 class="card-title"><?php echo $sales_accesorie['accessory'];?> </h4>
        <p class="card-text"><?php echo $sales_accesorie['user'];?></p>
        <p class="card-text"><?php echo $sales_accesorie['date'];?></p>
        <p class="card-text">$ <?php echo $sales_accesorie['price'];?>.000</p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
<div class="row mt-5">
<h3>Ventas de Yates</h3>
<?php foreach ($sales_yachts as $sales_yacht) : ?>
  <div class="col-sm-12">
    <div class="card bg-light">
      <div class="card-body">
        <h4 class="card-title"><?php echo $sales_yacht['yacht'];?> </h4>
        <p class="card-text"><?php echo $sales_yacht['user'];?></p>
        <p class="card-text"><?php echo $sales_yacht['date'];?></p>
        <p class="card-text">$ <?php echo $sales_yacht['price'];?>.000</p>
        <p class="card-text"><?php echo $sales_yacht['method'];?></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
</div>
<script>
var xValues = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE","OCTUBRE", "NOVIEMBRE","DICIEMBRE"];
var barColors = ["red", "green","blue","orange","brown", "red", "green","blue","orange","brown","red", "green"];

new Chart("yachts", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: [<?php foreach ($sum_yachts as $data) {
        echo $data.",";
      } ?>]
    }]
  },
  options: {
    title: {
      display: true,
      text: "Ventas de Yates realizadas"
    }
  }
});

new Chart("accessories", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data:[<?php foreach ($sum_accessories as $data) {
        echo $data.",";
      } ?>]
    }]
  },
  options: {
    title: {
      display: true,
      text: "Ventas de Accesorios realizadas"
    }
  }
});

var xValues = ["Yates", "Accesorios"];
var yValues = [<?php echo $counts[0]['yachts'].",".$counts[0]['accessories'];?>];
var barColors = [
  "#b91d47",
  "#00aba9",
];

new Chart("type", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Tipos de ventas realizadas"
    }
  }
});
</script>
</body>
</html>
