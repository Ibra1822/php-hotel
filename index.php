<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <title>php-hotel</title>

  <style>
  body{
    padding: 20px;
  }
  </style>

</head>
<body>

<div class="container">

<form action="./index.php" method="GET">

<input class="me-1" type="radio" name="Parking_yes" id="yes">
<label for="yes">Con Parcheggio</label>
<input class="ms-5" type="radio" name="Parking_no" id="no">
<label for="no">Senza Parcheggio</label>
  
</form>

</div>


<div class="container mt-5  table-cnt">
<table class="table table-light mt-5">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizzione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal Centro</th>
    </tr>
   
  </thead>
  <tbody>
 <?php foreach($hotels as $hotel){
    if($hotel['parking'] === false){
      $hotel['parking'] = 'No';
    }else{
      $hotel['parking'] = 'Si';
    };
      echo '<tr>';
      echo '<td>' . $hotel['name'] . '</td>';
      echo '<td>' . $hotel['description'] . '</td>';
      echo '<td>' . $hotel['parking'] . '</td>';
      echo '<td>' . $hotel['vote'] . '</td>';
      echo '<td>' . $hotel['distance_to_center'] . '</td>';
      echo '</tr>';
    };
 ?>
  </tbody>
</table>
</div>




</body>
</html>