<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$lisa = new Bicycle('blue',1, 2);
$homer = new Car('pink',5, 'fuel');
$bart = new Truck('black', 2, 4, 100);
$milhouse = new Truck('yellow', 2, 4, 100);

var_dump($lisa);
var_dump($homer);
var_dump($bart);
var_dump($milhouse);

// Moving bike
echo 'Moving Bike of Lisa<br/>';
echo $lisa->forward();
echo '<br> Vitesse du vélo : ' . $lisa->getCurrentSpeed() . ' km/h' . '<br>';
echo $lisa->brake();
echo '<br> Vitesse du vélo : ' . $lisa->getCurrentSpeed() . ' km/h' . '<br>';
echo $lisa->brake();

//Moving Car
echo '<br><br>Moving Car of Homer <br/>';
echo $homer->forward();
echo '<br> Vitesse de la voiture : ' . $homer->getCurrentSpeed() . ' km/h' . '<br>';
echo $homer->brake();
echo '<br> Vitesse de la voiture : ' . $homer->getCurrentSpeed() . ' km/h' . '<br>';

//Moving Truck
echo '<br><br>Moving Truck of Bart <br/>';
echo 'Capacité du camion : '.$bart->getCapacityStorage() . '<br>';
echo 'Pourcentage de stokage utilisées : '. $bart->getLoad() . ' % <br>';
echo $bart->checkLoad().'<br>';
echo $bart->forward();
echo '<br> Vitesse du camion : ' . $bart->getCurrentSpeed() . ' km/h' . '<br>';
echo $bart->brake();
echo '<br> Vitesse du camion : ' . $bart->getCurrentSpeed() . ' km/h' . '<br>';
echo "Chargement<br>";
$bart->setLoad(100);
echo $bart->checkLoad();