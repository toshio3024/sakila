<?php

// . Digitar un número y mostrar qué mes del año es. 
// . Validar que no se pueda digitar un número que no sea mayor que 12 o menor que 1. .

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
    <form action="" method="get">
        <div class="container w-25">

            <h5>Ingrese un numero del mes de ese año</h5>

            <div class="mb-3">
                <label for="">mes</label>
                <input type="text" name="mes" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Resultado</button>
            </div>

        </div>
    </form>

    <?php
    $año = date("y");
    $num = $_GET['mes'];
    
    if ($num == 1){
        echo "enero";
    }
    elseif ($num == 2){
        echo "febrero";
    }
    elseif ($num == 3){
        echo "marzo";
    }
    elseif ($num == 4){
        echo "abril";
    }
    elseif ($num == 5){
        echo "mayo";
    }
    elseif ($num == 6){
        echo "junio";
    }
    elseif ($num == 7){
        echo "julio";
    }
    elseif ($num == 8){
        echo "agosto";
    }
    elseif ($num == 9){
        echo "septiembre";
    }
    elseif ($num == 10){
        echo "octubre";
    }
    elseif ($num == 11){
        echo "noviembre";
    }
    elseif ($num == 12){
        echo "diciembre";
    }
    elseif ($num > 12){
        echo "solo existen 12 meses";
    }
    ?>





</body>

</html>