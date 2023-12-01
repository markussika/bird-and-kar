<?php

include_once "Vehicle.php";

class Kar extends Vehicle
    {
    static $describe = "i have 4 wheels, but sometimes 3";

    function __construct($brand = "", $mileage = 0)
    {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }
    function __destruct()
    {
        echo $this->brand . " is dead at mileage " . $this->mileage . "Km" . "<br>";
    }
    function increaseMileage($amount)
    {
        $this->mileage = $this->mileage += $amount;
    }
    static function makeNoice() {
        return "Beep, Beep!";
    }
}


?>