<?php

// 5. Imprimir los números pares del 1 al 100.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>

    <div class="container w-25">
        <h5>imprimir lo numero par del hasta 100</h5>

        <form action="" method="get">

            <div class="mb-3">
            </div>


        </form>

        <?php
    $i = 0;
    while ($i <= 99):
    $i++;
        if (($i % 2) == 0) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp$i<br>";
        } 
        endwhile;
        ?>



</body>

</html>