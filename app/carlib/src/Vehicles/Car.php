<?php

namespace Vehicles;

class Car implements VehicleInterface {
    private $make, $model, $year, $price, $used, $milage, $color;
    
    public function __construct() {
        
    }

    // Make
    public function getMake() {
        return $this->make;
    }  

    public function setMake($m) {
        $this->make = $m;
    } 
    
    // Model
    public function getModel() {
        return $this->model;
    }  

    public function setModel($mo) {
        $this->model = $mo;
    }
    
    // Year
    public function getYear() {
        return $this->year;
    }  

    public function setYear($y) {
        $this->year = $y;
    }
    
    // Price
    public function getPrice() {
        return $this->price;
    }  

    public function setPrice($p) {
        $this->price = $p;
    }
    
    // Used
    public function getUsed() {
        return $this->used;
    }  

    public function setUsed($u) {
        $this->used = $u;
    }
    
    // Milage
    public function getMilage() {
        return $this->milage;
    }  

    public function setMilage($mi) {
        $this->milage = $mi;
    }  
    
    // Color
    public function getColor() {
        return $this->color;
    }  

    public function setColor($co) {
        $this->color = $co;
    }
}
