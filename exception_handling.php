<?php
function checkNum($number){
    if($number>1){
        //ok, apparently php HAS throw command and exceptions
        throw new Exception("Value must be 1 or below");
    }
    return true;
}
try{
    checkNum(2);
}catch(Exception $e){
    echo 'Message: ' . $e->getMessage();
}

class customException extends Exception{
    public function errorMessage(){
        $errorMsg = 'Error on line' .$this->getLine() . ' in ' . $this->getFile()
            . ':<b>' . $this->getMessage().'</b> is not a valid E-Mail address<br>';
        return $errorMsg;
    }
}

$email = "zafer.dogan_hsr.ch";
try{
    if(filter_var($email,FILTER_VALIDATE_EMAIL) ===false){
        throw new customException($email);
    }
}catch(customException $ex){
    echo $ex->errorMessage();
}

function myException($exception){
    echo "<b> Exception:</b>" . $exception->getMessage();
}
set_exception_handler('myException');

throw new Exception("Uncaught Exception occured");