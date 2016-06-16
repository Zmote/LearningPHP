<!doctype html>
<html>
<body>
<?php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15,13),
    array("Saab", 5,2),
    array("Land Rover",17,15)
);
$hlength = count($cars);
for($x = 0;$x <$hlength;$x++){
    echo $cars[$x][0].": In stock: ".$cars[$x][1].", sold: ".$cars[$x][2]."<br>";
}
?>
</body>
</html>