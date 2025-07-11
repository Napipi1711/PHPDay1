<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home5</title>
</head>
<body>
    <form action="" method="post">
        <label for="n">Nhập chuỗi để kiểm tra nguyên âm:</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>

    <?php
    if (isset($_POST['btnSend'])) {
        $input = $_POST['n'];

       
        $inputLower = strtolower($input);

        
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;

       
        for ($i = 0; $i < strlen($inputLower); $i++) {
            if (in_array($inputLower[$i], $vowels)) {
                $count++;
            }
        }

        echo "Số nguyên âm trong chuỗi là: $count";
    }
    ?>
</body>
</html>
