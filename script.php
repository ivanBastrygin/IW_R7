<?php  
$x = $_POST["x"];
$n = $_POST["n"];
$sum=0;
   for($i=0;$i<=n;$i++){

$sum += (1)/((2*$i +1)*pow($x,2*$i+1));

      }  
      echo 2*$sum;
?>