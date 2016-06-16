<!doctype html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['SCRIPT_NAME'] . "<br>";
echo $_SERVER['HTTP_HOST'] . "<br>";
echo $_SERVER['REQUEST_METHOD'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>";
echo $_SERVER['HTTP_ACCEPT'] . "<br>";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['fname'];
    if(empty($name)){
        echo "Name is empty<br>";
    }else{
        echo "Gesendet: $name<br>";
    }
}
?>

</body>
</html>