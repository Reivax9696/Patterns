<?php

class Tigger {

    private $roarCounter = 0;
    
    private function __construct() {
        echo "Building character..." . PHP_EOL;
    }

    public function roar() {
        $this->roarCounter++;
        echo "Grrr!" . PHP_EOL;
    }

    public static function getInstance() {
        static $instance = null;
        if ($instance === null) {
            $instance = new Tigger();
        }
        return $instance;
    }

    
    public function getCounter() {
        return $this->roarCounter;
    }
}


$tigger = Tigger::getInstance();
$tigger->roar(); 
$tigger->roar();
$tigger->roar();
$tigger->roar(); 

echo "Tigger roared " . $tigger->getCounter() . " times." . PHP_EOL;



?>