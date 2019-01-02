<?php

$fizz = 0;
while ($fizz < 10){
    $fizz ++;
    if($fizz % 5 == 0 && $fizz % 3 == 0){
    echo "<p>FizzBuzz</p>";
}   elseif($fizz % 5 == 0){
    echo "<p>Buzz</p>";
}   elseif($fizz % 3 == 0){
    echo "<p>Fizz</p>";
}   else{
    echo "<p>$fizz</p>";
}
}
?>