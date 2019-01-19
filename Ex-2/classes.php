<?php
class AddressDisplay
{
	private $addressType;
	private $addressText;

	public function getAddressType()
	{
		return $this->addressType;
	}
	public function setAddressType($addressType)
	{
		$this->addressType=$addressType;
	}
	public function getAddressText()
	{
		return $this->addressText;		
	}
	public function setAddressText($addressText)
	{
		$this->addressText=$addressText;	
	}
}

class EmailAddressDisplayAdapter extends AddressDisplay
{
	public function __construct($emailAddress)
	{
		return $emailAddress->getEmailAddress();
		//return $emailAddress;
	}
}
class EmailAddress 
{
	private $emailAddress;

	public function getEmailAddress()
	{
		echo "<br />".$this->emailAddress; 
	}
	public function setEmailAddress($email)
	{
		$this->emailAddress=$email;
	}
}
?>	