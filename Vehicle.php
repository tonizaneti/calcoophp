<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 23/08/2018
 * Time: 22:02
 */

class Vehicle
{
    public $brand;
    public $color;
    public $engine;

    public function getEngine($type="horse power")
    {
        //return $this->engine . " horsepower";
        return "{$this->engine}{$type}";
    }

}