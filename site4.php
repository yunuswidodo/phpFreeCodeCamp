<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ----------------- POST VS GET ----------------------------- -->
    <form action="site4.php" method="POST">
        password : <input type="password" name="password">
        <input type="submit">
    </form>

    <?php echo $_POST["password"] ?>


    <!-- kalao get ada value didalam link || kalao post tidak ada -->
</body>

</html>