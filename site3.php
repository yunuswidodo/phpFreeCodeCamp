<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="site3.php" method="GET">

        Color : <input type="text" name="color"> <br>
        plural Noun : <input type="text" name="pluralNoun"> <br>
        Celebrity : <input type="text" name="celebrity"> <br>

        <input type="submit">
    </form>
    <br> <br>

    <?php

    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];

    echo "rose are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "i love $celebrity <br>";

    ?>
</body>

</html>