<?php
require_once('classes.php'); 

$email = new EmailAddress(); 

$email->setEmailAddress("trueline.chirag@gmail.com"); 

$address = new EmailAddressDisplayAdapter($email); 

//echo $address->getEmailAddress();
$address->setAddressType("<br />Local Address");
$address->setAddressText("Royal Park,Street No.-5,Kalawad Road,Rajkot.");
echo($address->getAddressType()." : \n"); 
echo($address->getAddressText());

?>