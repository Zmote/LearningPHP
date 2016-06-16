<!doctype html>
<html>
<body>
<?php
//indexed arrays
$cars = array("Volvo","VW","Mercedes");
$othercars[0] = "Volvo";
$othercars[1] = "ZaferVW";
$othercars[2] = "NiyaziMercedes";
foreach($cars as $car){
    echo "$car<br>";
}
foreach($othercars as $othercar){
    echo "$othercar<br>";
}
echo count($cars) . "<br>";
echo count($othercars) . "<br>";

//associative arrays
$mycars = array("Zafer"=> "Volvo", "Niyazi"=> "Peugot");
echo $mycars['Zafer'] . "<br>";
$mycars['Hasan'] = "Mercedes";
echo $mycars['Hasan'] ."<br>";
foreach($mycars as $x =>$x_value){
    echo "Key=" . $x . ", Value=" .$x_value;
    echo "<br>";
}
//multi-dimensional arrays

?>
</body>
</html>