<!DOCTYPE html>
<?php
define("ZAFER", "Zafer rulez the world!");
$x = 2;
$y = 3;
$xvalue = true;
$yvalue = false;
echo "<html><body>";
echo strlen("Hello World!") . "<br>";
echo str_word_count("Hello world!") . "<br>";
echo strrev("Hello World!") . "<br>";
echo strpos("Hello world I am awesome", "world") . "<br>";
echo str_replace("world", "Zafer", "Hello world!") . "<br>";
echo ZAFER . "<br>";
echo $x ** $y . "<br>";
echo $x <> $y . "<br>";
echo "<br>";
if($xvalue and $yvalue){
    echo "if-Zweig<br>";
}else{
    echo "else-Zweig<br>";
}
//bei Union wird auf die Keys geachtet, bei default werden
//mit gleichem Zeichen "angefangen", was Union fehlschlagen lässt
//sprich, falsch ausgerechnet wird --> ie. ohne die "a" => "Volvo"
//Zuweisungen würde cars nur Werte von sportcars enthalten
$sportcars = array("a" => "Volvo", "b" => "VW");
$familycars = array("c"=> "Toyota","d" => "Golf");
$cars = $sportcars + $familycars;
foreach ($cars as $car){
    echo $car ."<br>";
}
echo "</body></html>";