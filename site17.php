<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- ----------------- class and object ----------------------------  -->
    <?php

    class Book
    {
        var $title; // belum berguna
        var $author;
        var $pages;
    }

    // oject is instead of class
    $Book1 = new Book; // ini object
    $Book1->title = "harry potter";
    $Book1->author = "JK Rowling";
    $Book1->pages = 400;


    $Book2 = new Book;
    $Book2->title = "Lord Of The Ring";
    $Book2->author = "Tolkien";
    $Book2->pages = 700;


    echo $Book2->author;

    ?>

</body>

</html>