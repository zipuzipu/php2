<?php 
$day  = array(2,15,22,30);

foreach ($day as $key => $value) {
	if($value <= 10){echo $value ," - 1- ondyq \n";}

	else if($value > 10 and $value <=20){echo $value ," - 2- ondyq \n";}

	else if($value > 20 and $value <=31){echo $value ," - 3- ondyq \n";}
}
?>