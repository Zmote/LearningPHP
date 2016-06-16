<?php
session_start();
?>
<!doctype html>
<html>
<body>
<?php
print_r($_SESSION);
session_destroy();
?>
</body>
</html>
