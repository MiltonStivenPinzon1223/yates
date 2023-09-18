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

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events: [
            <?php foreach ($quotes as $quote) : ?>
            {
                title: '<?php echo $quote['user'];?> - <?php echo $quote['specialty'];?> - <?php echo $quote['hour'];?>',
                start: '<?php echo $quote['date'];?>',
                color: '#063BC0',
                textColor: '#ffffff',
            },
          <?php endforeach; ?>
        ],
        });
        calendar.render();
      });

    </script>
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
      <a href="./logout" class="btn btn-dark">Salir</a>
    </div>
  </div>
</nav>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <a href="quotes/create" class="btn btn-success">Agendar</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-9 col-sm-12">
<div id='calendar'></div>
    </div>
<div class="col-md-3 col-sm-12">
<div class="row">
<?php foreach ($quotes as $quote) : ?>
  <div class="col-sm-12">
    <div class="card bg-light">
      <div class="card-body">
        <h4 class="card-title"><?php echo $quote['specialty'];?></h4>
        <p class="card-text"><?php echo $quote['date'];?></p>
        <p class="card-text"><?php echo $quote['hour'];?></p>
        <form action="./edit" method="post">
          <input type="hidden" name="id" value="<?php echo $quote['id'];?>">
          <input type="submit" class="btn btn-success" value="Editar">
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
</div>
</body>
</html>
