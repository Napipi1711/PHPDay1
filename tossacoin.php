<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flip a Coin</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
    <h1 class="text-center" >Coin</h1>
<form action="" method="post">
             
        </div>
    <div>
        <input type="submit" name="btnSend" value="Send"/>
</form>
<?php
    if(isset($_POST['btnSend'])){
        $coin = null;
        $coin = rand(0,1);
        if($coin ==0){
            echo("Tail");
        }
        else{
            echo("Head");
        }
    }
?>
</body>
</html>