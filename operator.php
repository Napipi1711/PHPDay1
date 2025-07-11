<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulate a simple calculate </title>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
    <h1 class="text-center" >Input to Calculate</h1>
    <form action="" method="post">
            <label for="num1">FirstNum</label>
            <input name = "num1" id="num1">
                <label for="num2">secondNum</label>
            <input name = "num2" id="num2">
            
            <label for="op">Operator</label>
                <select name="op" id="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>

        </div>
    <div>
        <input type="submit" name="btnSend" value="Send"/>
</form>
<?php
    if (isset($_POST['btnSend'])) {
                   $num1 = $_POST["num1"];
                   $num2 = $_POST["num2"];
                   $op = $_POST["op"];
                    switch ($operator) {
                        case '+':
                            $result = $num1 + $num2;
                            break;
                        case '-':
                            $result = $num1 - $num2;
                            break;
                        case '*':
                            $result = $num1 * $num2;
                            break;
                        case '/':
                            $result = $num1 != 0 ? $num1 / $num2 : "Division by zero!";
                            break;
                        default:
                            echo "Invalid operator.<br>";
                            break;
                    }

                    echo "The result of $firstNumber $operator $secondNumber = $result<br>";
                    echo "-------------------------------------- End Ex7. <br>";
                }
            ?>
</body>
</html>