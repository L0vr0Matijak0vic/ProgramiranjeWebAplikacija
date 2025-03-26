<!DOCTYPE html>
<html lang = "hr">
<head>
    <meta charset="UTF-8" />
    <title>Submit forme</title>
</head>
<body>
    <?php
        $num1 = $_POST["broj1"];
        $num2 = $_POST["broj2"];
        echo "<p>Prvi broj je $num1</p> ";
        echo "<p>Drugi broj je $num2</p> ";
        $num3 = (3 * $num1 - $num2) / 2;
        echo "<p>Rezultat je $num3</p> ";
    ?>
</body>
</html>