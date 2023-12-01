<?php
include_once "Vehicle.php";

 class Train extends Vehicle {
    public function __construct( $brand  ,  $trackGauge ,  $milage ){}
    public function __destruct(){
        echo $this->brand. "is dead at mileage". $this->milage;
    }
    function increaseMileage($amount)
    {
        $this->milage = $this->milage + $amount;
    }
    static function makeNoice() {
        return "choo, choo !";
    }
}