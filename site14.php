<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- ------------------ while loop ----------------------  -->

    while loop = cek dulu baru dicetak <br>
    do while loop = di cetak dulu baru dicek <br> <br>

    <?php
    $index = 1;

    while ($index <= 5) {
        echo $index;
        $index++;
    }

    echo "</br>";
    // do while  || liahtlah perbedaannya
    $index2 = 6;
    do {
        echo $index2;
        $index2++;
    } while ($index <= 5);

    echo "<br>";

    // for
    for ($i = 1; $i <= 5; $i++) {
        echo $i;
    }

    // for in array

    echo "<br>";
    $luckynumber = array(8, 16, 24, 32, 40);
    for ($y = 0; $y <= count($luckynumber); $y++);
    echo $y;
    echo "<br>";
    echo "$luckynumber[$y] </br>"; // menampilkan isi semua array


    echo "<br>";
    $nama = array(1, 2, 3, 4, 5);
    for ($n = 0; $n <= count($nama); $n++) {
        echo $nama[$n];
    }
    ?>
</body>

</html>