<?php
$employee['Name']="Arun";
$employee['Gender']="Male";
$employee['Age']=18;
$employee['Qualification']="Graduate";
$employee['Email id']="arun@gmail.com";
echo "USER DETAILS<br><br>";
foreach ($employee as $key => $value) {
	echo "$key : $value<br><br>";
}

?>