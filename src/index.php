<?php
 function Multiply(int $firstNumber,int $secondNumber, ?closure $functionEcho = null )
 {
      $result = $firstNumber * $secondNumber;
      if($functionEcho instanceof Closure) {
          $functionEcho($result);
      }
      return $result;
 }

 Multiply(5,4,function ($number) {
     echo "Result of multiply is: $number" . PHP_EOL;
 });