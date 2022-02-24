<?php

// Digitar 4 notas y calcular e imprimir el promedio.

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
        <h5>Digitar 4 nota</h5>

        <form action="" method="get">

            <div class="mb-3">
                <label for="">nota1</label>
                <input type="text" name="nota1" class=" form-control">
            </div>

            <div>
                <div class="mb-3">
                    <label for="">nota2</label>
                    <input type="text" name="nota2" class="form-control">
                </div>

                <div>
                    <div class="mb-3">
                        <label for="">nota3</label>
                        <input type="text" name="nota3" class="form-control">
                    </div>

                    <div>
                        <div class="mb-3">
                            <label for="">nota4</label>
                            <input type="text" name="nota4" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary">calcular</button>
                        </div>

        </form>

        <?php

        print_r($_GET);
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];
        $nota4 = $_GET["nota4"];

        $resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        echo "$resultado";
        ?>


</body>

</html>