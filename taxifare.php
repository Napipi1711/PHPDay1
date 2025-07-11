<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Fare Calculator</title>
</head>
<body>
    <div class="container">
        <h1>Taxifare</h1>
        <form action="" method="post">
            <label for="numbers">Enter Kilometers:</label>
            <input type="text" name="numbers" class="btn btn-primary mt-3"/>  
            <br><br>
            <input type="submit" name="btnSend" value="Send"/>
        </form>

        <?php
        const FIRST_LEVEL  = 15000;
        const SECOND_LEVEL = 12000;
        const THIRD_LEVEL  = 9000;      
        const FOURTH_LEVEL = 12 / 100;

        if (isset($_POST['btnSend'])) {
            $numberKm = isset($_POST['numbers']) ? (float)$_POST['numbers'] : 0;
            $amount = 0;

            if ($numberKm <= 0) {
                echo "<p class='result'>Please enter a positive number.</p>";
            } else {
                if ($numberKm <= 1) {
                    $amount = $numberKm * FIRST_LEVEL;
                } elseif ($numberKm <= 5) {
                    $amount = 1 * FIRST_LEVEL + ($numberKm - 1) * SECOND_LEVEL;
                } elseif ($numberKm <= 140) {
                    $amount = 1 * FIRST_LEVEL + 4 * SECOND_LEVEL + ($numberKm - 5) * THIRD_LEVEL;
                } else {
                    $amount = 1 * FIRST_LEVEL + 4 * SECOND_LEVEL + ($numberKm - 5) * THIRD_LEVEL;
                    $amount *= (1 - FOURTH_LEVEL); 
                }

                $amount = number_format($amount, 0, '.', '.'); 
                echo "<div class='result'>Customer must pay for : <strong>$amount đ</strong></div>";
            }
        }
        ?>
    </div>
</body>
</html>
