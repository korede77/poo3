<?php
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'HighWay.php';


$mycar = new Car('blue',4,'electric');
$myc = new Car('white',2,'fuel');
$bike = new Bicycle('white',1);
$kat = new Truck('yellow',5,'fuel',50);

$way = new MotorWay();
$way->addVehicle($mycar);
$way->addVehicle($myc);
$way->addVehicle($kat);
var_dump($way);
$way1 = new ResidentialWay();
$way1->addVehicle($mycar);
$way1->addVehicle($myc);
$way1->addVehicle($kat);
var_dump($way1);
$way2 = new PedestrianWay();
$way2->addVehicle($mycar);
$way2->addVehicle($myc);
$way2->addVehicle($kat);
var_dump($way2);


