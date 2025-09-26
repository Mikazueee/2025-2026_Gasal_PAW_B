<?php 

    // Teknik Informatika

    # Teknik Industri

    /* Teknik
        informatika
    */
    // echo "Hello World <br>";

    // $h = print("Hello world print <br>");
    // echo '$h <br>';

    // $number = 10;
    // printf("Hallo Dunia %s", $number);

    // $name = "Danendra";
    // $NAME = "Alex";

    // $n = str_replace("Danendra", "Jhon", $name);

    // echo $n . "<br>";
    // echo $NAME . "<br>";

    // $x = 10;

    // echo 3 <=> 2;

    // function age(){
    //     // global $x;
    //     echo $x;
    // }

    // age();

    // session_start();

    // $_SESSION['name'] = "Danendra";

    $barang1 = "Laptop";
    $harga1 = 1000;
    $quantity = 5;

    function perkalian($x, $y){
        return $x * $y;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nama Barang</td>
            <td>Harga</td>
            <td>Quantity</td>
            <td>Total Harga</td>
        </tr>
        <tr>
            <td><?= $barang1?></td>
            <td><?= $harga1?></td>
            <td><?= $quantity?></td>
            <td><?= perkalian($harga1, $quantity)?></td>
        </tr>
    </table>

    <p>Diskon 5%</p>
    <p>Total harga : ???</p>
</body>
</html>

