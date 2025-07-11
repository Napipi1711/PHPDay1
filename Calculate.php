<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Age</title>
</head>
<body>
    <div class="container">
    <div class="col-md-12">
    <h1 class="text-center" >Input to Calculate</h1>
        <form action="" method="post">
            <input type="text" name="year"class="btn btn-primary mt-3"/>    
        </div>
    <div>
        <input type="submit" name="btnSend" value="Send"/>

    </div>
        </form>
    </div>
    <?php
    if(isset($_POST['btnSend'])){
        $year = $_POST['year'];
        $currentYear= date('Y');
        $age = $currentYear - intVal($year);
        echo "<h4>Your age is : $age</h4>";
    }
    ?>

</body>
</html>