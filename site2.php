<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!------------------- user input  --------------->
    <!-- method yang yang ada diphp dengan yang ada dihtml harus sama -->

    <form action="site2.php" method="GET">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>

    answer<?php echo $_GET["num1"]  + $_GET["num2"] ?>



</body>

</html>