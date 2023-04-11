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

 $parking = $_GET["parking"];

 $parking_filtered = [];

 if ($parking){
     foreach ($hotels as $hotel) {
         if ($hotel["parking"]=== true){
             $parking_filtered[] = $hotel ;
         }
     }
 }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>HOTEL</title>
     <!-- bootstrap  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 </head>

 <body>
     <div class="container my-4">
         <div>
             <table class="table table-info">
                 <thead>
                     <tr>
                         <th scope="col">Nome</th>
                         <th scope="col">Descrizione</th>
                         <th scope="col">Parcheggio</th>
                         <th scope="col">Voto</th>
                         <th scope="col">KM dal centro</th>
                     </tr>
                 </thead>
                 <tbody>
                     <!--parking è true -->
                     <?php if ($parking) : ?>
                         <?php foreach ($parking_filtered as $hotel) : ?>
                             <tr>
                                 <td>
                                     <?php echo $hotel['name'] ?>
                                 </td>
                                 <td>
                                     <?php echo $hotel['description'] ?>
                                 </td>
                                 <td>
                                     <?php echo $hotel['parking'] ? 'SI' : 'NO' ?>
                                 </td>
                                 <td>
                                     <?php echo $hotel['vote'] ?>
                                 </td>
                                 <td>
                                     <?php echo $hotel['distance_to_center'] ?> Km
                                 </td>
                             </tr>
                         <?php endforeach; ?>
                         <!-- parking false -->
                         <?php else : ?>
                             <?php foreach ($hotels as $hotel) : ?>
                                 <tr>
                                     <td>
                                         <?php echo $hotel['name'] ?>
                                     </td>
                                     <td>
                                         <?php echo $hotel['description'] ?>
                                     </td>
                                     <td>
                                         <?php echo $hotel['parking'] ? 'SI' : 'NO' ?>
                                     </td>
                                     <td>
                                         <?php echo $hotel['vote'] ?>
                                     </td>
                                     <td>
                                         <?php echo $hotel['distance_to_center'] ?> Km
                                     </td>
                                 </tr>
                             <?php endforeach; ?>
                     <?php endif; ?>
                 </tbody>
             </table>
             <!-- ricerca-->
            <form class="row p-4 align-items-center" method="GET">
                <div class="form-check col-auto ">
                    <input class="form-check-input" type="checkbox" id="parking" name="parking" value="true">
                    <label class="form-check-label" for="parking"> Parcheggio Incluso</label>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-info">CERCA</button>
                </div>
            </form>
         </div>
     </div>
     <!-- bootsrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
         crossorigin="anonymous"></script>
 </body>

 </html>