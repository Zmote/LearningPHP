<!DOCYTYPE html>
<html>
<body>
<?php
    $x = 0;
    function myFunction(){
        global $x;
        $x++;
        echo "$x <br>";
    }
    myFunction();
    myFunction();
    myFunction();
    function myFunctionWithParams($var = "Dogan"){
        echo "$var<br>";
    }
    myFunctionWithParams(); //default varaibles possible
    myFunctionWithParams(3);
    myFunctionWithParams("Zafer");
    function withReturn(){
        global $x;
        return $x;
    }
    echo withReturn();
?>
</body>
</html>
