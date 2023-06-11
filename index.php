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
    $park = isset($_GET['park']);
    $vot = $_GET['vot'] ?? '';
    $arrfiltrati=[];
    $arrfiltrati = $hotels;

    if($vot){
        $filter_result=[];
        foreach($arrfiltrati as $hotel){
            if($hotel['vote'] >= $vot ){
                $filter_result[] = $hotel;
            }
        }
        $arrfiltrati = $filter_result;
    }

    if($park){
        $sfilter_result=[];
        foreach($filter_result as $hotel){
            if($hotel['parking']){
                $sfilter_result[] = $hotel;
            }
        }
        $arrfiltrati = $sfilter_result;
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <style>
        form{
            padding: 1rem;
            display: flex;
            justify-content: center;
            gap: 2rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <form action="" method="get">
        <label for="park">CON PARCHEGGIO</label> <input type="checkbox" name="park" id="parck">
        <label for="park"  >VOTO MINIMO</label>
        <select name="vot" id="vot" value="">
            <option value="1"><?=$vot?></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit" class="btn btn-dark">cerca</button>
        <a href="/php-hotel/" class="btn btn-danger">reset</a>
        
    </form>
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
        <tbody><?php foreach($arrfiltrati as $hotel){?>
            <tr>
                <td class="table-light"><?=$hotel['name']?></td>
                <td class="table-light"><?=$hotel['description']?></td>
                <td class="table-light"><i class="bi <?=$hotel['parking'] ? 'bi-check-circle-fill' : 'bi-x-circle-fill'?>"></i></td>
                <td class="table-light"><?=$hotel['vote']?></td>
                <td class="table-light"><?=$hotel['distance_to_center']?></td>
            </tr> <?php }?>
        </tbody>
      
       
          
      </table>
</body>
</html>