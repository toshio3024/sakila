<?php require_once "parte_head.php"; ?>

<body>

    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>


        <form class="col-6" method="post">
            <div class="mb-3">
                <label for="">manager_staff_id</label>
                <select class="form-select" name="address_id">
                    <option value="" selected>seleciones---</option>

                    <?php
                    $query = "SELECT * FROM staff";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->staff_id'>$fila->first_name</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select" name="address_id">
                    <option value="" selected>seleciones---</option>

                    <?php
                    $query = "SELECT * FROM address";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->address_id'>$fila->address</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <select name="" id="">
                    <option value="" selected>seleciones---</option>
                    <?php
                    $query = "SELECT * FROM address";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->address_id'>$fila->address</option>";
                        }
                    }
                    ?>
                </select>
            </div>

        </form>

        <?php if (!empty($error)) : ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close"></button>

            </div>

        <?php endif; ?>
    </div>

    <div class="row">
        <form class="col-4">
            <div class="input-group mb-3">
                <input type="text" name="buscador" class=" form-control" placeholder="buscador">
                <button class="btn btn-outline-secondary" type="submit" name="boton-buscar"><i class="bi bi-search"></i>Buscar</button>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" name="boton-guardar">Guardar</button>
            </div>

        </form>
    </div>
    </form>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID Tiendas</th>
                        <th scope="col">ID Gerente</th>
                        <th scope="col">ID Direcciones</th>
                        <th scope="col">Fecha atualizada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM store  ";

                    $buscador = $_GET['buscador'] ?? "";
                    if ($buscador != "") {
                        $query = "SELECT * FROM store WHERE store_id = '$buscador'";
                    }

                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "
                            <tr> 
                                <td>{$fila->store_id}</td>
                                <td>{$fila->manager_staff_id}</td> 
                                <td>{$fila->address_id}</td> 
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