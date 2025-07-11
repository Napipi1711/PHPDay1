<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Numbers</title>
</head>
<body>
            <div class="container">
        <div class="col-md-12">
    <h1 class="text-center" >Input to Calculate</h1>
<form action="" method="post">
            <label for="numbers">Number (separate by command ",")</label>
            <input type="text" name="numbers"class="btn btn-primary mt-3"/>    
        </div>
    <div>
        <input type="submit" name="btnSend" value="Send"/>
</form>
<?php
    if(isset($_POST['btnSend'])){
        $numbers = $_POST['numbers'];
        $nums = explode(",",$numbers);
        $max = $nums[0];
        for($i =1; $i < count($nums); $i++){
            if($max < $nums[$i]){
                $max =$nums[$i];
            }
        }
        echo "The Max Element is: $max "; 
    }
    ?>
</body>
</html>