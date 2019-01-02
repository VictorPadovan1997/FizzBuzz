<?php
class FizzBuzz {
  public function __construct($number) //construtor é responsável pela inicialização da classe
   {
    $this->number = $number;
  }
  public function __toString() //Converte para String grupo de catacter
  {
    if ($this->number % 3 == 0 && $this->number % 5 == 0) {
      return 'FizzBuzz';
    } elseif ( $this->number % 3 == 0 ) {
      return 'Fizz';
    } elseif ( $this->number % 5 == 0 ) {
      return 'Buzz';
    } else {
      return (string)$this->number;
    }
  }
}
