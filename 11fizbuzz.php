<?php
function FzzBzz( $it = 10 )
{
    for ( $i = 1; $i <= $it; $i++ ) {
        if ( ( $i % 3 ) == 0 && ( $i % 5 ) == 0 ) {
            echo 'FzzBzz';
        } else if ( ( $i % 5 ) == 0 ) {
            echo 'Buzz';
        } else if ( ( $i % 3 ) == 0 ) {
            echo 'Fizz';
        } else {
            echo $i;
        }
    }
}
