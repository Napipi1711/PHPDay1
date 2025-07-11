<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home10</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">Nhập n :</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>

    <?php
    if (isset($_POST['btnSend'])) {
        $n = $_POST['n'];

        if (is_numeric($n) && $n > 0) {
            $n = (int)$n;
            $a = 0;
            $b = 1;

            echo "<p> Fibonacci gồm $n phần tử:</p>";
            for ($i = 0; $i < $n; $i++) {
                echo $a . " ";
                $temp = $a + $b;
                $a = $b;
                $b = $temp;
            }
        } else {
            echo "<p>Vui lòng nhập số hợp lệ.</p>";
        }
    }
    ?>
</body>
</html>
