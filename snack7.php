<?php

$classe65 = [
 [
  'nome' => 'Mario',
  'cognome' => 'Rossi',
  'voti' => [
   'italiano' => rand(1, 10),
   'matematica' => rand(1, 10),
   'storia' => rand(1, 10),
   'geografia' => rand(1, 10),
  ],
 ],

 [
  'nome' => 'Luigi',
  'cognome' => 'Verdi',
  'voti' => [
   'italiano' => rand(1, 10),
   'matematica' => rand(1, 10),
   'storia' => rand(1, 10),
   'geografia' => rand(1, 10),
  ],
 ],

 [
  'nome' => 'Maria',
  'cognome' => 'Aranci',
  'voti' => [
   'italiano' => rand(1, 10),
   'matematica' => rand(1, 10),
   'storia' => rand(1, 10),
   'geografia' => rand(1, 10),
  ],
 ],

 [
  'nome' => 'Paola',
  'cognome' => 'Gialli',
  'voti' => [
   'italiano' => rand(1, 10),
   'matematica' => rand(1, 10),
   'storia' => rand(1, 10),
   'geografia' => rand(1, 10),
  ],
 ],

 [
  'nome' => 'Mac',
  'cognome' => 'Miller',
  'voti' => [
   'italiano' => rand(1, 10),
   'matematica' => rand(1, 10),
   'storia' => rand(1, 10),
   'geografia' => rand(1, 10),
  ],
 ],

];

$sommavoti = 0;

foreach($classe65 as $alunno){
 foreach($alunno['voti'] as $voto){
  $sommavoti = $sommavoti + $voto;
 }
 $media = $sommavoti / count($alunno['voti']);
 $alunno['media'] = $media;
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
</head>

<body>
 <div class="container">
  <h1 class="pb-5 text-primary text-center">Lista studenti con rispettive medie</h1>

  <div class="row ">
   <?php
   foreach ($classe65 as $studente) {
   ?>

    <div class="col">
     <h2 class="text-center"><?php echo $studente['nome'] . " " . $studente['cognome']  ?></h2>
     <h5 class="text-center">Media : <?php echo $studente['media']    ?>   </h5>
    </div>





 <?php } ?>

 </div>
 </div>




</body>

</html>