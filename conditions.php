<!DOCTYPE html>
<html>
<body>
<?php
//$t = date("H:i:s");
//$t = date("H");
$t = "24";
if($t < "20"){
    echo "Have a good day<br>";
}else if($t < "23" && $t > "20"){
    echo "Feierabend, yay!<br>";
}else{
    echo "Time to sleep!<br>";
}

$favcolor = "blue";

switch($favcolor){
    case "red":
        echo "Your favorite color is red";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    default:
        echo "You have no favorites, wtf?";
        break;
}
echo "<br>";
for($i = 0; $i < 10;$i++){
    echo $i . "<br>";
}

$cars = array("Volvo", "Golf", "Mercedes");

foreach($cars as $car){
    echo $car . "<br>";
}
?>
</body>
</html>
