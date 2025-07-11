<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home8</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">nhập R :</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>
    <?php
            if(isset($_POST['btnSend'])){
            $r = $_POST['n'];
            $S = 3.14 * $r * $r;
            echo "Diện tích hình tròn = 3.14 * $r * $r = . $S";
        }
        ?>

</body>
</html>