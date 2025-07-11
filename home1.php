<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home1</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">Enter number n:</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>

    <?php
    
    function so_hop_le($gia_tri) {
        return is_numeric($gia_tri);
    }

    if (isset($_POST['btnSend'])) {
        $n = $_POST['n'];

        if (so_hop_le($n)) {
            $n = (int)$n;

            if ($n % 2 == 0) {
                echo "$n là số chẵn";
            } else {
                echo "$n là số lẻ";
            }
        } else {
            echo "Vui lòng nhập một số hợp lệ.";
        }
    }
    ?>
</body>
</html>
