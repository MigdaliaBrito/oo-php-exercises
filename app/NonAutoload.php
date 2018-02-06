<?php 

require_once(__DIR__ . "/Car.php");

// $a = 10;
// $b = 5;

// echo add($a, $b);
// echo substract($a, $b);

/**
* Our first Class definition
*/
// class House {
// 	// A property decribing the number of rooms in this house.
// 	public $num_rooms;

// 	function __construct() {
		
// 	}
	
//     // A method which returns the number of rooms in this house.
//     public function getNumRooms() {
//       return $this->num_rooms;
//     }
// }


// $myHouse = new House();
// $myHouse->num_rooms = 2;
// echo $myHouse->getNumRooms();

// var_dump($myHouse);

$car = new Car();
var_dump($car);