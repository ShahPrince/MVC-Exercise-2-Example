<?php
require_once("Animal.php");

class Lion extends Animal
{
	public function __construct($family,$food)
	{
		parent::__construct($family,$food);
		$this->family=$family;
		$this->food=$food;
	}

}
?>