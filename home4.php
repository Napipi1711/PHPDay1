<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home4</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">Nhập  để kiểm tra prime:</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>

    <?php
    if (isset($_POST['btnSend'])) {
        $n = $_POST['n'];

        if (is_numeric($n) && intval($n) == $n) {
            $n = (int)$n;

            if ($n == 1) {
                echo "1 không phải là số prime.";
            } else {
                $isPrime = true;
                for ($i = 2; $i <= sqrt($n); $i++) {
                    if ($n % $i == 0) {
                        $isPrime = false;
                        break;
                    }
                }

                if ($isPrime) {
                    echo "$n là số prime.";
                } else {
                    echo "$n không phải là số prime.";
                }
            }
        } else {
            echo "Vui lòng nhập một số hợp lệ.";
        }
    }
    ?>
</body>
</html>
