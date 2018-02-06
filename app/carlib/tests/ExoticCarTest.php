<?php

use PHPUnit\Framework\TestCase;

// Bring in our ExoticCar class.
use Vehicles\ExoticCar;

final class ExoticCarTest extends TestCase {
    private $exoticCar;

    public function testExoticCarCanBeBuilt() {
        // Instantiate a new car.
        $e = new ExoticCar(1, 2, 3);
        
        // Assert that the newly built car is in fact a Car.
        $this->assertInstanceOf(ExoticCar::class, $e);
    }
    
    public function testPowerToWeight() {
        $weight = 2;
        $hp = 6;
        $e = new ExoticCar(1, $weight, $hp);
        
        //expecting 3
        $this->assertEquals(3, $e->calcPowerToWeight());
    }
}
