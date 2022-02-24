<?php

// Digitar un número y mostrar qué día de la semana es. 
// Validar que no se pueda digitar un número que no sea mayor que 7 o menor que 1..

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
        <h5>Digitar un número y mostrar qué día de la semana es</h5>

        <form action="" method="get">

            <label for="">dia</label>
            <input type="text" name="dia" class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary">Resultado</button>
    </div>


</body>

</html><?php
    $semana= $_GET['dia'];
    
    if ($semana == 1){
        echo "el dia es lunes";
    }
    if ($semana == 2){
        echo "el dia es marte";
    }
    if ($semana == 3){
        echo "el dia es miercoles";
    }
    if ($semana == 4){
        echo "el dia es jueves";
    }
    if ($semana == 5){
        echo "el dia es viernes";
    }
    if ($semana == 6){
        echo "el dia es sabado";
    }
    if ($semana == 7){
        echo "el dia es domingo";
    }
    elseif ($semana >7){
        echo "El numero de dias son 7";
    }
?>