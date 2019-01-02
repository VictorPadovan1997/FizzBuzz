<?php
function fizzbuzz($num) {
    if ($num % 5 == 0 && $num % 3 == 0) {
        echo("FizzBuzz");
    } else if ($num % 5 == 0) {
        echo("Buzz");
    } else if ($num % 3 == 0) {
        echo("Fizz" );
    } else {
        echo($num);
    }
}
