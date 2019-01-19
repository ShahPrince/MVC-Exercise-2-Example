<?php
require_once("Animal.php");
require_once("Cow.php");
require_once("Lion.php");

//Animal.php 

/*$a=new Animal("Pet Animal","Grass");
echo $a->get_family();
echo "<br />";
echo $a->get_food();
echo $a->set_family("Wild Animal");
echo $a->set_food("Meat");
echo "<br />";
echo $a->get_family();
echo "<br />";
echo $a->get_food();
*/

//Cow.php

$c=new Cow("Pet Animal","Grass");
echo $c->get_family();
echo "<br />";
echo $c->get_food();
echo "<br />";
$c->set_owner("Maganbhai");
echo $c->get_owner();


$l=new Lion("Wild Animal","Meat");
echo $l->get_family();
echo "<br />";
echo $l->get_food();
echo "<br />";


?>