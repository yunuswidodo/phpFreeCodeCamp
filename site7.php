<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- ------------------------ associative array ------------------------------- -->


    <form action="site7.php" method="POST">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
    $grades = array("jim" => "A+", "pam" => "A+", "oscar" => "C+");
    //$grades["jim"] = "F";
    //echo $grades["jim"];
    //echo Count($grades);

    echo $grades[$_POST["student"]];

    ?>

</body>

</html>