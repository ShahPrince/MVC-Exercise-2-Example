<?php
class BankAccount
{
	private $accountNumber=1017817050;
	private  $totalBalance=0;

	public function deposit($tb)
	{
		 $this->totalBalance+=$tb;
		 return $this->totalBalance;
	}
	public function withdraw($wd)
	{
		if($wd < $this->totalBalance)
		{
			$this->totalBalance-=$wd;
			return $this->totalBalance;
		}	
		else
		{
			echo "withdraw amount is greather than Balance";
		}
	}
	public function getAccountNumber()
	{
		return $this->accountNumber;
	}
	public function getbalance()
	{
		return $this->totalBalance;
	}
	public function __toString()
	{
		return  "<br /> Account number ".$this->accountNumber." has Rs ".$this->totalBalance." Balance.";
	}
}
class SavingAccount extends BankAccount
{
	private $interestRate;
	private $irate;
	public function addInterest($ir)
	{
		$this->interestRate=$ir;
		$irate=parent::getBalance();
		$irate*=$this->interestRate;
		$irate=parent::getBalance()+$irate;
		echo "<br />After add Interest in balance TotalBalance is $irate";	

/*		$this->interestRate=$ir;
		$inammount=$this->totalBalance;
		$inammount*=$this->interestRate;
		$this->totalBalance+=$inammount;
		return $this->totalBalance;		
*/	}
	public function getInterest()
	{
		echo "<br />Interest Rate is  : ".$this->interestRate;
	}
}
class CheckingAccount extends BankAccount
{
	private $fee;

	public function deductFee($df)
	{
		$this->fee=$df;
		parent::withdraw($this->fee);	
	}
}

//BankAccount

/*$b=new BankAccount();
$b->getbalance();
echo $b;
$b->deposit(200);
echo $b;
//$b->getbalance();
$b->withdraw(100);
echo $b;
$b->getbalance();
*/

//SavingAccount

$s=new SavingAccount();

$s->deposit(200);
echo $s;
$s->addInterest(4.25);
$s->getInterest();

//CheckingAccount

$c=new CheckingAccount();
$c->deposit(200);
echo $c;
$c->deductFee(50.33);
echo $c;
?>