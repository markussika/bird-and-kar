<?php
include_once "index.php"

class Math
{
    static function addTwo($viens , $divi)
    {
        return $viens + $divi;
    }


    static function factorial($n) {
         $factorial  = 1;
         for($i = 1 ; $i <= $n; $i++){
             $factorial = $factorial *$i;
         }
         return $factorial;
        }



        static function sum($visiMas)
        {
            return $visiMas +$visiMas;
        }
}