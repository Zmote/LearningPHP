<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$txt = "Hello World";
static $z = 10;
echo $txt . "<br>";
echo "Fuck yeah! $txt <br>";
echo "<button>Click me</button><br>";
$x = 5 + 5;
$y = 10;
$x = $x + $y;
echo "Result: " . $x . "<br>";
echo $x + $x + $y ."<br>";
function myTest(){
    global $x,$y;
    $x = $x * $y;
}
function myTest2(){
    $GLOBALS['y'] = $GLOBALS['y'] + $GLOBALS['y'];
}

function myTest3(){
    global $z; //interesting access on static
    $z++;
    echo $z . "<br>";
}

myTest();
myTest2();
echo $x ."<br>";
echo $GLOBALS['y'] ."<br>";
myTest3();
myTest3();
myTest3();
//multi-paramteter output echo
echo "This ", "string ", "was ", "made ", "by ", "Zafer!<br>";
print "<h2> PHP is Fun</h2>";
print "<h3> PHP is soo much Fun</h3>";
print "Simple string ";
print "Another simple string<br>";
$val = 323;
var_dump($val);
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br>" . $cars[0] . "<br>";

class Car{
    function Car(){
        $this->model = "VW";
    }
}
//object-behaviour seems similar to javascript
$myCar = new Car();
echo $myCar->model . "<br>";
$myCar = null;
echo $myCar . "<br>";
var_dump($myCar);

?>

</body>
</html>