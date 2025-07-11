<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home3</title>
</head>
<body>
      <form action="" method="post">
        <label for="n">nhập n để tính giai thừa:</label>
        <input type="text" name="n" />
        <input type="submit" name="btnSend" value="Send" />
    </form>
<?php
    if(isset($_POST['btnSend'])){
        $n = $_POST['n'];
        $gt = 1;
        for($i = 1; $i <=$n;$i++){
            $gt *= $i;
        }
        echo $n .'! = ' .$gt; 
    }
?>
</body>
</html>