<!doctype html>
<html>
<body>
<?php
/*
ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port','465');
if(!file_exists("sample1.txt")){
    die("File not found<br>");
}else{
    $file=fopen("sample1.txt","r");
}
*/

function customError($errno,$errstr){
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Webmaster has been notified";
    error_log("Error: [$errno] $errstr", 1,
        "shodaime.hikarikage@gmail.com","From: Zafer");
}

set_error_handler("customError", E_USER_WARNING);
/*
echo($test);
*/
//--> wie throw, ähnlich
$test = 2;
if($test >=1){
    trigger_error("Value must be 1 or below", E_USER_WARNING);
}
?>
</body>
</html>