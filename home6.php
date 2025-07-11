<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home6</title>
</head>
<body>
    <form action="" method="post">
    <label for="a"> a :</label>
    <input type="text" name="a" /><br><br>

    <label for="b"> b:</label>
    <input type="text" name="b" /><br><br>

    <label for="c"> c:</label>
    <input type="text" name="c" /><br><br>
 print"Công thức chu vi tam giác : tổng 3 cạnh!";
</br>
    <input type="submit" name="btnSend" value="Send" />

</form>
   
    <?php
    if(isset($_POST['btnSend'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $sum = $a + $b + $c;
        echo "Chu vi tam giác là : $sum";
    }
    ?>
</body>
</html>