<?php require_once "parte_head.php"; ?>

<body>

    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="row">
            <form class="col-6" method="post">

                <div class="mb-3">
                    <label for="">store_id</label>
                    <select class="form-select" name="store_id">
                        <option value="" selected>seleciones---</option>


                        <?php
                        $query = "SELECT * FROM store";

                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->customer_id'>$fila->first_name</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" name="first_name" class="form-control">
                </div>

                <label for="">Apellido</label>
                <input type="text" name="last_name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Correo</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">address_id</label>
            <select class="form-select" name="address_id">
                <option value="" selected>seleciones</option>



                <?php
                $query = "SELECT * FROM address";

                $resultado = mysqli_query($conexion, $query);

                if ($resultado) {
                    while ($fila = mysqli_fetch_object($resultado)) {
                        echo "<option value='$fila->address_id'>$fila->first_name</option>";
                    }
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="">create_date</label>
            <input type="text" name="create_date" class="form-control">
            <option value="" selected>seleciones---</option>

            <div class="mb-3">
                <button class = "btn btn-primary" name= "boton-guardar">Guardar</button>
                <button type="button" class="btn-close"></button>
            </div>

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
                            <th scope="col">ID Clientes</th>
                            <th scope="col">ID tiendas</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">ID Direccion</th>
                            <th scope="col">Activo</th>
                            <th scope="col">Creando dato</th>
                            <th scope="col">Fecha atualizada</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $query = "SELECT * FROM customer ";

                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM customer WHERE first_name = '$buscador'";
                        }

                        $resultado = mysqli_query($conexion, $query);
                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "
                            <tr> 
                                <td>{$fila->customer_id}</td>
                                <td>{$fila->store_id}</td> 
                                <td>{$fila->first_name}</td> 
                                <td>{$fila->last_name}</td> 
                                <td>{$fila->email}</td> 
                                <td>{$fila->address_id}</td> 
                                <td>{$fila->active}</td> 
                                <td>{$fila->create_date}</td> 
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