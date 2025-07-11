<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate the sum</title>
</head>
<body>
    <h1>Input to Calculate</h1>
    <form action="" method="post">
        <label for="n">Enter number n:</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>

    <?php
    if (isset($_POST['btnSend'])) {
        $n = $_POST['n'];

        if (is_numeric($n) && $n > 0) {
            $n = (int)$n;
            $total = 0;

            for ($i = 1; $i <= $n; $i++) {
                $total += $i;
            }

            echo "The result s = 1 + 2 + 3 + ... + $n is: $total";
            echo "<br /> -------------------------------------- End Ex8. <br />";
        } else {
            echo "Please enter a valid positive number.";
        }
    }
    ?>
</body>
</html>
