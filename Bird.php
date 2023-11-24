<?php

class Bird {
    public $name;
    private $age;

    public function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }

    public function __destruct(){
        echo $this->name . " parvertas par negeri un nomira ☠️" . "<br>";
    }
    public function fly(){
        echo "fly high🕊️". $this->name;
    }
}


?>

