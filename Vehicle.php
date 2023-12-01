<?php

abstract class Vehicle{
public $brand;
protected $milage;
static $describe = "I am large and vivi";

public function __destruct(){
    echo $this->brand. "is dead at mileage". $this->milage;
}
function increaseMileage($amount)
{
    $this->milage = $this->milage + $amount;
}
abstract static function makeNoice();

};