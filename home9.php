<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home9</title>
</head>
<body>
     <form action="" method="post">
        <label for="n">nhập n :</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>
    <?php
    if (isset($_POST['btnSend'])) {
        $n = $_POST['n'];
        $reversed = strrev($n); 
        if ($n == $reversed) {
            echo "$n là số Palindrome";
        } else {
            echo "$n không phải là số Palindrome";
    }
}
    ?>
</body>
</html>