<?php 

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

use Vehicles\{
	Car,
	Truck,
	ToyCar
};

$cars = 0;

function howManyCars(){
	global $cars;
	$cars++;
	if ($cars > 1){
		return '<br>Hay '.$cars.' carros<br>';
	}
	else {
		return '<br>Hay '.$cars.' carro<br>';
	}
	
}



//aqui estaba la clase Vehicle

//aqui estaba la clase Car

//aqui estaba la clase Truck


$firstCar = new Car('Eduardo');
$firstCar->mover();
echo 'Dueño: '.$firstCar->owner;
echo '<br>';
$firstCar->set_gas(true);
$haveGas = $firstCar->get_gas() ? 'Si' : 'No';
echo $firstCar->owner.' tiene combustible?: '.$haveGas.'.';
echo '<br>';
echo 'GPS pos: '. $firstCar->getPos();
echo '<br>';

$secondCar = new Truck('Juanito','4x4');
echo '<br>Dueño camioneta: '.$secondCar->owner.'<br>';
$secondCar->mover();

$truck2 = new Truck('Jose','pick up');
echo '<br>Dueño camioneta: '.$truck2->owner.'<br>';
$truck2->mover();
#echo 'Total trucks: '.Truck::$count; //en caso de ser public static
echo 'Total trucks: '.Truck::getTotal();

$thirdCar = new Car('Pedro');
echo '<br>Dueño: '.$thirdCar->owner;
echo'<br>';
$thirdCar->mover();

//$varVe = new \Vehicles\VehicleBase('Fer');
//$varVe->mover();

$ser = serialize($firstCar);
$newCar = unserialize($ser);

echo 'NewCar Owner: '.$newCar->getOwner().'<br>';
echo '<br>';
echo 'Toy Car';
try{
	$Toy = new ToyCar('Dani');
	$Toy->mover();
} catch(Exception $e){
	echo $e->getMessage();
} finally {
	echo 'Esto siempre se imprime, haya o no excepción<br>';
}