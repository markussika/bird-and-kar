<?php

class Kar {
    public $brand ;
    private $milage;

    public function __construct($b, $m){
        $this->brand = $b;
        $this->milage = $m;
    }

    public function __destruct(){
        echo $this->brand . "is dead at mileage". milage;
    }

    public function __increaseMileage($amount){
        echo 
    }
}

?>