<?php
//Математические функции
	echo M_PI; 
	echo "<br>";
	echo M_E;
	echo "<br>";

	$x = -15;
	echo abs($x)."<br>";

	$a = 53.2243235;
	echo round($a)."<br>";

	$a = 53.2243235;
	echo round($a,3)."<br>";

	echo ceil($a)."<br>";
	echo floor($a)."<br>";

	echo mt_rand(0,19)."<br>";

	echo min(0,34,-2,34,5,2)."<br>";
	echo max(0,34,-2,34,5,2)."<br>";

	$x = 1;
	echo ($x * 180)/ M_PI;
	echo sin($x)."<br>";
	echo cos($x)."<br>";
	echo tan($x)."<br>";
	echo 1/tan($x)."<br>";
?>
