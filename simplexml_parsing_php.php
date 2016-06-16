<?php
//libxml_use_internal_errors(true);
/*
$myXMLData =
    "<?xml version='1.0' encoding='UTF-8'?> 
    <document> 
    <user>John Doe</wronguser> 
    <email>john@example.com</wrongemail> 
    </document>";
    "<?xml version='1.0' encoding='UTF-8'?>
    <note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Don't forget me this weekend!</body>
    </note>";
    */

$xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;
/*
if($xml === false){
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error){
        echo "<br>", $error->message;
    }
}else{
    print_r($xml);
}
*/
//print_r($xml);