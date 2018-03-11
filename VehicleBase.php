<?php 

namespace Vehicles;

abstract class VehicleBase
{
	public $owner;
	private $gas = False; //encapsulamiento: evitar que una variable sea
						  //accedida desde otro metido que no hayamos definido

	public function __construct($ownerName)
	{
		echo howManyCars();
		$this->owner = $ownerName;
	}

	public function __destruct(){
		echo '<br>Se ejecuta al termino de todo uso de instancias.'; //puede limpiar memoria o ejecutar algo
																	//al termino de uso de la instancia dada
	}

	public function mover(){
		echo $this->startEngine();
		echo 'moviendo vehiculo<br>';
	}
	public function set_gas($gas){
		return $this->gas = $gas;
	}
	public function get_gas(){
		return $this->gas;
	}
	public function getOwner(){
		return $this->owner;
	}

	public abstract function startEngine();

}
