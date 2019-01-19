<?php
require_once("Animal.php");
class Cow extends Animal
{
	private $owner;

	public function __construct($family,$food)
	{
		parent::__construct($family,$food);
		$this->family=$family;
		$this->food=$food;
	}
	public function set_owner($owner)
	{
		$this->owner=$owner;
	}
	public function get_owner()
	{
		return $this->owner;
	}

}

?>