<!DOCTYPE html>
<html>
    <body>

        <form action="post_test.php" method="post" >
            Name: <input type="text" name="username">
            <button type="submit">Senden</button>
        </form>
        <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['username'];
            echo "$name <br>";
        }
        ?>
        </div>
    </body>
</html>