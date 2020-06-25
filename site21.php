<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ---------------------- inheritance / turunan ------------------------  -->

    <?php
    class Chef
    {
        function makeChicken()
        {
            echo " the chef makes chicken <br>";
        }
        function makeSalad()
        {
            echo " the chef makes salad <br>";
        }
        function makeSpecialDish()
        {
            echo " The chef makes bbq ribs <br>";
        }
    }

    class ItalianChef extends Chef
    {
        function makePasta()
        {
            echo " the chef makes pasta";
        }
    }

    $chef = new Chef();
    $chef->makeChicken();


    $italianChef = new ItalianChef();
   // $italianChef->makeChicken()
    $italianChef->makePasta();





    ?>

</body>

</html>