<?php

$results = [

 [
  "casa" => "Gravina",
  "trasferta" => "Altamura",
  "puntiCasa" => rand(1, 50),
  "puntiTrasferta" => rand(1, 50),
 ],

 [
  "casa" => "Bitonto",
  "trasferta" => "Bari",
  "puntiCasa" => rand(1, 50),
  "puntiTrasferta" => rand(1, 50),
 ],


 [
  "casa" => "Milano",
  "trasferta" => "Matera",
  "puntiCasa" => rand(1, 50),
  "puntiTrasferta" => rand(1, 50),
 ],


 [
  "casa" => "Rifles",
  "trasferta" => "Roma",
  "puntiCasa" => rand(1, 50),
  "puntiTrasferta" => rand(1, 50),
 ],

 [
  "casa" => "KKRules",
  "trasferta" => "BMTH",
  "puntiCasa" => rand(1, 50),
  "puntiTrasferta" => rand(1, 50),
 ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
 <title>Document</title>
</head>

<body>
<h1 class="text-center pt-2 pb-5">Basketball results</h1>

<?php
foreach ($results as $result) {
?>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-center"><?php echo $result["casa"]; ?></h2>
        <p class="text-center"><?php echo $result["puntiCasa"]; ?></p>
      </div>
      <div class="col-md-6">
        <h2 class="text-center"><?php echo $result["trasferta"]; ?></h2>
        <p class="text-center"><?php echo $result["puntiTrasferta"]; ?></p>
      </div>
    </div>
  </div>

  <?php } ?>




</body>

</html>