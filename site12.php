<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- ------------------ building a better Calculator ------------------  -->

    <!-- step adalah parameter yang akan dimasukan -->

    <form action="site12.php" method="POST">
        Firt Name :<input type="number" step=0.1 name="num1"> <br>
        op : <input type="text" name="op"> <br>
        Second Number :<input type="number" name="num2"> <br>
        <input type="submit">
    </form>

    <?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if ($op == "+") {
        echo $num1 + $num2;
    } else if ($op == "-") {
        echo  $num1 - $num2;
    } else if ($op == "*") {
        echo $num1 * $num2;
    } else if ($op == "/") {
        echo $num1 / $num1;
    } else {
        echo "invalid operation";
    }


    ?>
</body>

</html>