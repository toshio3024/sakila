<?php require_once "parte_head.php"; ?>

<body>

    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <form class="col-6" method="post">
            <div class="mb-3">
                <label for="">Ciudad</label>
                <input type="text" name="city" class="form-control">
            </div>

            <form class=" col-6" method="post">
                <div class="mb-3">
                    <label for="">pais</label>
                    <select class=" form-select" name="country_id">
                        <option value="" selected>seleciones</option>

                        <?php

                        $query = "SELECT * FROM country";

                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->country_id'>$fila->country</option>";
                            }
                        }
                        ?>


                    </select>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" name="boton-guardar">Guardar</button>
                </div>

            </form>

            <?php if (!empty($error)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close"></button>

            </div>

            <?php endif; ?>
    </div>
    <div class="row">
        <form class="col-4">
            <div class="input-group mb-3">
                <input type="text" name="city" class=" form-control" placeholder="buscador">
                <button class="btn btn-outline-secondary" type="submit" name="boton-buscar"><i class="bi bi-search"></i>Buscar</button>
            </div>

        </form>
    </div>


    <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID ciudades</th>
                    <th scope="col">Ciudades</th>
                    <th scope="col">Paise</th>
                    <th scope="col">Fecha atualizada</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $query = "SELECT * FROM city ";

                $buscador = $_GET['buscador'] ?? "";
                if ($buscador != "") {
                    $query = "SELECT * FROM city WHERE city = '$buscador'";
                }

                $resultado = mysqli_query($conexion, $query);
                if ($resultado) {
                    while ($fila = mysqli_fetch_object($resultado)) {
                        echo "
                            <tr> 
                                <td>{$fila->city_id}</td>
                                <td>{$fila->city}</td> 
                                <td>{$fila->country_id}</td> 
                                <td>{$fila->last_update}
                            </td>";
                    }
                }

                ?>


            </tbody>
        </table>

    </div>
    </div>

    </div>

    <?php require_once "parte_footer.php"; ?>
</body>

</html>