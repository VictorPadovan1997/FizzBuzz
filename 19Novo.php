<?php

class FizzBuzz
{
    public function Buzz($fizz)
    {
        if ($fizz % 3 === 0 && $fizz % 5 === 0) {
            return 'FizzBuzz';
        } else if ($fizz % 3 === 0) {
            return 'Fizz';
        } else if ($fizz % 5 === 0) {
            return 'Buzz';
        }
        return strval($fizz); // trval — Retorna o valor string de uma variável
    } 
}
?>