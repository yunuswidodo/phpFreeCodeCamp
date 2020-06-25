<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- -------------- cunstructor --------------------  -->

    <?php

    class Book
    {
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages)
        {
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    // oject is instead of class
    $Book1 = new Book("harry potter", "JK Rowling", 400);
    $Book1->title = "hanger games";


    $Book2 = new Book("Lord Of The Ring", "Tolkien", 700);

    echo $Book1->title;





    ?>
</body>

</html>