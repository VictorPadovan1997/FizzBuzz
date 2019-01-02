<?php
class FizzBuzz {
    function fizbuzz( $numero ) {
        if ( $numero % 3 == 0 && $numero % 5 == 0 ) {
            return "FizzBuzz";
        } elseif ( 0 == $numero % 3 ) {
            return "Fizz";
        } elseif ( 0 == $numero % 5 ) {
            return "Buzz";
        } else {
            return $numero;
        }
    }
}
?>