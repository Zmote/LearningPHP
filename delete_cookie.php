<!doctype html>
<html>
<body>
<?php
setcookie('user',"",time() - 3600);
if(isset($_COOKIE['user'])){
    echo "Cookie: " . $_COOKIE['user'];
}else{
    echo "Cookie 'user' is deleted";
}
?>
</body>
</html>
