<?php

//  Digitar el año de nacimiento e imprimir la edad actual.

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
        <h5>imprimir fecha de nacimiento y edad atual</h5>

        <form action="" method="get">
            <div class="mb-3">
                <label for="">Nacimiento</label>
                <input type="text" name="Nacimiento" class="form-control">
            </div>


            <div class="mb-3">
                <button class="btn btn-primary">calcular</button>
            </div>

        </form>

        <?php


        $año = 2022;
        $edad = intval($_GET["Nacimiento"]);
        $calcular = ( $año - $edad);
        echo "$calcular";
        ?>


</body>

</html>