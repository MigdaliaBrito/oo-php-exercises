<?php

use PHPUnit\Framework\TestCase;

// Bring in our Car class.
use Vehicles\Car;
use Vehicles\ExoticCar;

final class CarTest extends TestCase {
    
    public function testCarCanBeBuilt() {
        // Instantiate a new car.
        $c = new Car();
        
        // Assert that the newly built car is in fact a Car.
        $this->assertInstanceOf(ExoticCar::class, $c);
    }
}
