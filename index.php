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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
</head>
<body>
    <table class="table table-light table-striped">
        <thead>
            <tr>
                <th class="table-darck">HOTELS</th>
                <th class="table-darck">DESCRIZIONE</th>
                <th class="table-darck">PARCHEGGIO</th>
                <th class="table-darck">VOTO</th>
                <th class="table-darck">DISTANZA CENTRO</th>
            </tr>
        </thead>
        <tbody><?php foreach($hotels as $hotel){?>
            <tr>
                <td class="table-light"><?=$hotel['name']?></td>
                <td class="table-light"><?=$hotel['description']?></td>
                <td class="table-light"><?=$hotel['parking']?></td>
                <td class="table-light"><?=$hotel['vote']?></td>
                <td class="table-light"><?=$hotel['distance_to_center']?></td>
            </tr> <?php }?>
        </tbody>
      
       
          
      </table>
</body>
</html>