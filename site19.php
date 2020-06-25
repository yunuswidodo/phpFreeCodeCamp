<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- ---------------- object function ----------------------  -->

    <?php

    class student
    {
        var $name;
        var $major;
        var $gpa;


        function __construct($name, $major, $gpa) // constructor 
        {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonor()
        {
            if ($this->gpa >= 3.5) {   // gpa == value in line 27 
                return "true";
            }
            return "false";
        }
    }

    $student1 = new student("yunus", "infor", 2.8); // object
    $student2 = new student("ahmad", "sitem", 3.6);

    echo $student2->hasHonor();
    ?>

</body>

</html>