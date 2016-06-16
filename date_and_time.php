<!doctype html>
<html>
<body>
<?php
date_default_timezone_set("Europe/Zurich");
echo "The time is " . date("h:i:sa"). "<br>";

$d = mktime(12,30,0,7,5,1989);
echo "My birthday: ". date("d.m.Y",$d) . "<br>";

$ds = strtotime("09:30pm July 5 1989");
echo "Created date is " . date("Y-m-d h:i:sa",$ds) . "<br>";

// --> time() --> returns current time in milliseconds or the like
// like .CurrentTimeMillis() from Java
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
include 'footer.php';
echo "<br>";
//echo readfile("sample.txt");
$myfile = fopen("sample.txt","r") or die("Unable to open file!");
//echo fread($myfile,filesize("sample.txt"));
//fgets moves pointer to next line after reading the line
echo fgets($myfile) ."<br>";
echo fgets($myfile). "<br>";
echo fgets($myfile). "<br>";
fclose($myfile);
$myotherfile = fopen("sample.txt","r");
while(!feof($myotherfile)){
    echo fgets($myotherfile) . "<br>";
}
fclose($myotherfile);
$myotherotherfile = fopen("sample.txt","r");
while(!feof($myotherotherfile)){
    echo fgetc($myotherotherfile);
}
echo "<br>";
fclose($myotherotherfile);

$mynewfile = fopen("test.txt","w") or die("Unable to open file!");
$txt = "Zafer Dogan
";
fwrite($mynewfile,$txt);
$txt = "Niyazi Dogan
";
fwrite($mynewfile,$txt);
fclose($mynewfile);

?>
</body>
</html>