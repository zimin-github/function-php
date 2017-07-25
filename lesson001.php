<?php 
	$x = 15;
	if (isset($x)) echo "Переменная существует";
	else echo "Переменная не существует";

echo "<br>";

	unset($x);
	if (isset($x)) echo "Переменная существует";
	else echo "Переменная не существует";

echo "<br>";


	$array = array(0,2,5);
	unset($array[1]);
	print_r($array);

echo "<br>";

	$x = 14;
echo "integer? ".is_integer($x)."<br>";
echo "doble? ".is_double($x)."<br>";
echo "string ".is_string($x)."<br>";
echo "numeric ".is_numeric($x)."<br>";
echo "boolean ".is_bool($x)."<br>";
echo "scalar ".is_scalar($x)."<br>";
echo "null ".is_null($x)."<br>";
echo "array" .is_array($x)."<br>";
echo "type ".gettype($x)."<br>";

?>
