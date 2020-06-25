<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ---------------- getter dan setter------------------------  -->

    <?php
    class Movie
    {
        public $title;
        private $rating;

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->setRating($rating);
        }

        function getRating()
        {
            return $this->rating;
        }

        function setRating($rating)
        {
            if ($rating == "G" || $rating == "PG") {

                $this->rating = $rating;
            } else {
                $this->rating = "NR";
            }
        }
    }

    $Avanger = new Movie("Avangers", "pg-13");

    //$Avanger->rating = "Dog";

    $Avanger->setRating("tayo");  // seeter runnya pakai yang bawah
    echo $Avanger->getRating()  // run getter

    ?>


</body>

</html>