<!doctype html>
<html>
<link href="css/bootstrap.css" rel="stylesheet">
<style>
    table,th,td{
        padding:5px;
    }
    table{
        float:left;
        margin-right: 20px;;
    }
</style>
<body>
<div class="col-md-4">
<table class="table-bordered">
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    foreach(filter_list() as $id => $filter){
        echo '<tr><td>' .$filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
</table>
</div>
<div class="col-md-4 text-info">
<?php
$str = "<h1>Hello World!</h1>";
//FILTER_SANITIZE_STRING removes all html tags from string for example
$newstr = filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr . "<br>";
?>
<?php
$int = 0;
//first condition because of 0 problem.
if( filter_var($int,FILTER_VALIDATE_INT) === 0
||!filter_var($int,FILTER_VALIDATE_INT)=== false){
    echo ("Integer is valid") . "<br>";
}else{
    echo ("Integer is not valid") . "<br>";
}
?>

<?php
$ip = "127.0.0.1";
if(!filter_var($ip,FILTER_VALIDATE_IP) === false){
    echo("$ip is a valid IP adress<br>");
}else{
    echo( "$ip is an invalid IP adress<br>");
}
?>
<?php
$email = "zafer.dogan@hsr.ch";
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
echo "Pre e-mail validation: $email <br>";
if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false){
    echo("$email is a valid email address<br>");
}else{
    echo("$email is an invalid email address<br>");
}
?>
<?php
$url = "http://www.20min.ch";
$url = filter_var($url,FILTER_SANITIZE_URL);
if(!filter_var($url,FILTER_VALIDATE_URL) === false){
    echo("$url is a valid url.<br>");
}else{
    echo("$url is an invalid url.<br>");
}
?>
<?php
$int = 122;
$min = 1;
$max = 200;
if(filter_var($int,FILTER_VALIDATE_INT,
        array("options" => array("min_range"=>$min,"max_range"=>$max)))===false){
    echo("Variable value is not within the legal range<br>");
}else{
    echo("Variable value is within the legal range<br>");
}
?>
<?php
//observe the optional thrid argument of the filter_var
//function and compare with the one from above, see variety.
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if(!filter_var($ip, FILTER_VALIDATE_IP,FILTER_FLAG_IPV6) === false){
    echo("$ip is a valid IPv6 address<br>");
}else{
    echo("$ip is not a valid IPv6 address<br>");
}
?>
<?php
$url = "http://www.w3schools.com?zafer=12&niyazi=10";

if(!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED) === false){
    echo("$url is a valid URL<br>");
}else{
    echo("$url is an invalid URL<br>");
}
?>
<?php
$str = "<h1>Hello WorldÆØÅ!</h1>";
$newstr = filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>
</div>
</body>
</html>