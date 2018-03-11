<?php 

namespace Vehicles;
require_once 'VehicleBase.php';


class ToyCar extends VehicleBase {
	public function mover(){
		echo $this->startEngine().'<br>';
		echo 'moviendo Carro de juguete<br>';
		
	}

	public function startEngine(){
		//return 'Car start engine...';
		throw new \Exception('Have not Engine. Its a toy!<br>');
	}

}