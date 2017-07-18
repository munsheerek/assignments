<?php
$email="info@baabtra.com";
$password=321;
if($email=="info@baabtra.com" && $password==321)
{
	echo "Login successfull";
}
else if($email=="info@baabtra.com" && $password!=321)
{
	echo "Invalid Password";
}
else
{
	echo "Invalid username and password";
}

?>