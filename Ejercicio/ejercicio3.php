<?php

// Calcular la distancia recorrida (Buscar formula de la distancia)

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
        <h5>Calcula la distancia recorrida</h5>

        <form action="" method="get">

            <div class="mb-3">
                <label for="">velocidad</label>
                <input type="text" name="velocidad" class=" form-control">
            </div>

            <div class="mb-3">
                <label for="">tiempo</label>
                <input type="text" name="tiempo" class=" form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">calcular</button>
            </div>

        </form>

        <?php

        print_r($_GET);
        $velocidad = $_GET["velocidad"];
        $tiempo = $_GET["tiempo"];
        
        $calcular = ($velocidad * $tiempo);
        echo "$calcular";
        
        ?>

    </div>

</body>

</html>