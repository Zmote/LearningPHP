<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<style>
    *{
        margin-bottom:10px;
    }
    .error{
        color:red;
    }
</style>
<body>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['username'])){
        $nameErr = "* Name is required";
    }else{
        $name = test_input($_POST['username']);
        if(!preg_match("/^[a-zA-z]*$/",$name)){
            $nameErr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST['email'])){
        $emailErr = "* Email is required";
    }else{
        $email = test_input($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }
    if(empty($_POST['website'])){
        $website = "";
    }else{
        $website = test_input($_POST['website']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
            $website)){
            $websiteErr = "Invalid URL";
        }
    }
    if(empty($_POST['comment'])){
        $comment = "";
    }else{
        $comment = test_input($_POST['comment']);
    }
    if(empty($_POST['gender'])){
        $genderErr ="* Gender is required";
    }else{
        $gender = test_input($_POST['gender']);
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    Name:<br> <input type="text" name="username" value="<?php echo $name; ?>">
    <span class="error"><?php echo "$nameErr";?></span>
    <br>
    E-Mail:<br><input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo "$emailErr";?></span>
    <br>
    Website:<br> <input type="text" name="website" value="<?php echo $website; ?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br>
    Comment:<br>
    <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
    <br>
    Gender:
    <input type="radio" name="gender" value="female" <?php if(isset($gender) && $gender =="female") echo"checked";?>> Female
    <input type="radio" name="gender" value="male" <?php if(isset($gender) && $gender =="male") echo"checked";?>>Male
    <span class="error"><?php echo "$genderErr";?></span>
    <br>
    <input type="submit">
</form>
<div>
    <?php
    if($name and $email and $website and $comment and $gender){
        echo "<h2>Your Input:</h2>";
        echo "Username: $name<br>";
        echo "E-Mail: $email<br>";
        echo "Website: $website<br>";
        echo "Comment: $comment<br>";
        echo "Gender: $gender<br>";
    }
    ?>
</div>
</body>
</html>