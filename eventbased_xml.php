<?php
/*
 * Explanation:
 *
1. Initialize the XML parser with the xml_parser_create() function
2. Create functions to use with the different event handlers
3. Add the xml_set_element_handler() function to specify which function will be executed when the parser encounters the opening and closing tags
4. Add the xml_set_character_data_handler() function to specify which function will execute when the parser encounters character data
5. Parse the file "note.xml" with the xml_parse() function
6. In case of an error, add xml_error_string() function to convert an XML error to a textual description
7. Call the xml_parser_free() function to release the memory allocated with the xml_parser_create() function
 * */
$parser = xml_parser_create();

function start($parser,$element_name,$element_attrs){
    switch($element_name){
        case "NOTE":
            echo " -- Note --<br>";
            break;
        case "TO":
            echo "To: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "Heading: ";
            break;
        case "BODY":
            echo "Message: ";
    }
}

function stop($parser,$element_name){
    echo "<br>";
}

function char($parser,$data){
    echo $data;
}

xml_set_element_handler($parser,"start","stop");
xml_set_character_data_handler($parser,"char");

$fp = fopen("note.xml","r");
while($data=fread($fp,4096)){
    xml_parse($parser,$data,feof($fp)) or
    die (sprintf("XML Error: %s at line %d"));
    xml_error_string(xml_get_error_code($parser));
    xml_get_current_line_number($parser);
}

xml_parser_free($parser);
