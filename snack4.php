<?php 


for ($i=0; $i < 15; $i++) {

 $numeri = range(1, 50);
 shuffle($numeri);
 $numeri = array_slice($numeri, 0, 15);

}

var_dump($numeri);


?>