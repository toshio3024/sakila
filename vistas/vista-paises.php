<?php require_once "parte_head.php"; ?>

<body>

    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">paises</label>
                    <input type="text" name="country" class="form-control">
                </div>
                <div class="mb-3">
                    <button name="boton-guardar" class="btn btn-primary">Guardar</button>
                </div>
                <?php
                if (!empty($error)) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo $error; ?>
                        <button type="button" class="btn-close"></button>

                    </div>

                <?php endif; ?>

            </form>
        </div>

        <div class="row">
            <form class="col-4">
                <div class="input-group mb-3">
                    <input type="text" name="buscador" class=" form-control" placeholder="buscador">
                    <button class="btn btn-outline-secondary" type="submit" name="boton-buscar"><i class="bi bi-search"></i>Buscar</button>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID paises</th>
                            <th scope="col">Paises</th>
                            <th scope="col">fecha atualizada</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM country";

                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM country WHERE country = '$buscador'";
                        }

                        $resultado = mysqli_query($conexion, $query);
                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "
                            <tr> 
                                <td>{$fila->country_id}</td>
                                <td>{$fila->country}</td> 
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