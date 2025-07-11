<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Area</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Input to Calculate</h1>
        <form action="" method="post">
            <label for="length">Length:</label>
            <input type="text" name="length" class="btn btn-primary mt-3"/><br><br>

            <label for="width">Width:</label>
            <input type="text" name="width" class="btn btn-primary mt-3"/><br><br>

            <input type="submit" name="btnSend" value="Send"/>
        </form>

        <?php
        if (isset($_POST['btnSend'])) {
            $length = isset($_POST['length']) ? (float)$_POST['length'] : 0;
            $width = isset($_POST['width']) ? (float)$_POST['width'] : 0;

            if ($length > 0 && $width > 0) {
                $area = $length * $width;
                echo "<h3>Area of rectangle: $area</h3>";
            } else {
                echo "<p>Please enter valid positive numbers for both length and width.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
