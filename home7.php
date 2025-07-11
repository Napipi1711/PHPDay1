<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home7</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">Nhập n:</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>
    <?php
        if (isset($_POST['btnSend'])) {
        $input = $_POST['n'];
        $final = strrev($input);
        echo "Chuỗi đảo ngược : $final";
        }
    ?>
    
</body>
</html>