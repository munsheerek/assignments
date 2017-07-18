<?php
$mark=60;
if($mark<=100 && $mark>=80)
{
	echo "The mark you have entered is : $mark <br> the student has got A grade";
}
else if($mark>=60 & $mark<80)
{
	echo "The mark you have entered is : $mark <br> the student has got B grade";
}
else if ($mark>=40 && $mark<60)
{
	echo "The mark you have entered is : $mark <br> the student has got C grade";
}
else if($mark>=30 && $mark<40)
{
	echo "The mark you have entered is : $mark <br> the student has got D grade";
}
else if($mark>=10 && $mark<30)
{
	echo "The mark you have entered is : $mark <br> the student has got E grade";
}
?>