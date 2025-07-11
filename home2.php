<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home2</title>
</head>
<body>
     <form action="" method="post">
        <label for="n">nhập n độ C :</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>
  

    <?php
        if (isset($_POST['btnSend'])) {
            $c = $_POST['n'];
            if(is_numeric($c)){
                $f = $c * 9 / 5 +32;
                echo "$c độ C = $f độ F";
            } 
            else{
                echo "Nhập số";
            }
        
        }

    ?>
</body>
</html>