<?php

class Train {
    public function __construct(public $brand  , public $trackGauge , private $milage ){}
    public function __destruct(){
        echo $this->brand. "is dead at mileage". $this->milage;
    }
    function increaseMileage($amount)
    {
        $this->milage = $this->milage + $amount;
    }
    static function makeNoise() {
        return "choo, choo !";
    }
}