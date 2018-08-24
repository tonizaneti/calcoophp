<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 23/08/2018
 * Time: 21:32
 */
require_once ("Car.php");
require_once ("Moto.php");

$ferrari = new Car;
$ferrari->brand='Ferrari';
$ferrari->color='Red';
$ferrari->engine=350;
$ferrari->doors=2;
$mustang= new Car;
$mustang->engine=300;
$mustang->color='Blue';
$mustang->brand="Mustang";
$mustang->doors=2;

$m = new Moto;
$m->brand="Yamaha";
$m->color="Red";
$m->engine = 250;

echo $ferrari->color;
echo "<pre>";
echo $mustang->getEngine();
echo "<br>Portas ". $mustang->doors;
echo "<br>Moto ". $m->brand;

//var_dump($ferrari);