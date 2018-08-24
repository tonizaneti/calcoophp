<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 23/08/2018
 * Time: 21:22
 */
class People
{
    public function getHello($name)
    {
        return "Hello {$name}!";
    }
}


$p = new People;

echo $p->getHello("Toni");

?>