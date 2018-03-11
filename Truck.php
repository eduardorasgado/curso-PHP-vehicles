<?php 

namespace Vehicles;
require_once 'VehicleBase.php';

class Truck extends VehicleBase {
	private static $count = 0;
	private $type;

	public function __construct($ownerName, $type){
		$this->type = $type;
		parent::__construct($ownerName);
		self::$count++; //self es la palabra reservada para las clases en general, no para objetos especificos.
	}

	//public function mover(){
	//	echo 'moviendo camioneta '.$this->type.'<br>';
	//}

	public static function getTotal(){
		return self::$count;
	}

	public function startEngine(){
		return 'Encendiendo camioneta...';
	}
}