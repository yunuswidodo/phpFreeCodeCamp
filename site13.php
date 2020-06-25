<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="site13.php" method="POST">
        gradde <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];

    switch ($grade) {
        case "A":
            echo "nilai sangat bagus";
            break;
        case "B":
            echo "baik saja";
            break;
        default:
            echo " gak usah kuliah";
    }


    ?>
</body>

</html>