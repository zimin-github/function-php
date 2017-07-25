<?php
//строковые функции

$str = "this is video";
echo strlen($str);
echo "<br>";

echo substr($str,2,5);
echo "<br>";

echo str_replace("video", "course", $str)."<br>";
echo str_replace("this", "that", $str)."<br>";

echo md5("password");

?>