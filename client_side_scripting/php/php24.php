<?php
function name($firstName,$middleName,$lastName,$seperator){
	return "{$firstName}{$seperator}{$middleName}{$seperator}{$lastName}";

}
echo name('Baabtra','Mentoring','Partner','_');



?>