<?php

namespace Vehicles;

class ExoticCar extends Car {
    private $numProduced;
    private $weight;
    private $horsePower;
    
    function __construct($n, $w, $h) {
        $this->numProduced = $n;
        $this->weight = $w;
        $this->horsePower = $h;
    }
    
    public function calcPowerToWeight() {
        return $this->horsePower / $this->weight;
    }
}

