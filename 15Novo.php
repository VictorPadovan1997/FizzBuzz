<?php

$coesma = 10;
for ($i=1; $i<=$coesma; $i++){
   if ($i % 3 == 0 && $i % 5 ==0) {
      echo "FIZZBUZZ <br />";
   }
   elseif ($i%3 == 0){
      echo "FIZZ <br />" ;
   }
   elseif ($i%5 == 0){
      echo "BUZZ<br />" ;
   }
   else {
      echo $i."<br />"; 
   }
}
?>