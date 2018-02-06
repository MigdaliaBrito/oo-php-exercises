<?php

require_once(__DIR__ . "/vendor/autoload.php");

use Vehicles\Car;
use Vehicles\ExoticCar;

$c = new Car();
$e = new ExoticCar(120, 10, 2);

// var_dump($c);
$e->setMake('Migs Mobile');
echo $e->getMake();
echo $e->calcPowerToWeight();


class MakeManager {
	function getVehicleMake(VehicleInterface $c) {
		return $c->getMake();
	}
}
