<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ---------------------------- checkbox ----------------------------->
    <form action="site6.php" method="POST">
        aples <input type="checkbox" name="fruits[]" value="aples"> <br>
        oranges <input type="checkbox" name="fruits[]" value="oranges"> <br>
        pears <input type="checkbox" name="fruits[]" value="pears"> <br>
        <input type="submit">
    </form>

    <?php
    $fruits = $_POST["fruits"];
    // echo $fruits[0];   || lihat index 
    echo $fruits[1];

    ?>
</body>

</html>


<?php ?>