<?php require_once "parte_head.php"; ?>

<body>

    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" name="first_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Apellido</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">address_id</label>
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
                    <label for="">Correo</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">store_id</label>
                    <select class="form-select" name="store_id">
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
                    <label for="">Nombre de usuario</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Contraseña</label>
                    <input type="text" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" name="boton-guardar">Guardar</button>
                    <button type="button" class="btn-close"></button>
                </div>

                <?php
                if (!empty($error)) : ?>


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
                            <th scope="col">ID personal</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Id Direccion</th>
                            <th scope="col">imagenes</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Id tiendas</th>
                            <th scope="col">activar</th>
                            <th scope="col">Nombre de Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col"> Fecha atualizada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM staff ";

                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM staff WHERE first_name = '$buscador'";
                        }

                        $resultado = mysqli_query($conexion, $query);
                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                $imagen = '<img src="data:image/jpeg;base64,' . base64_encode($fila->picture) . '"/>';
                                echo "
                            <tr> 
                                <td>{$fila->staff_id}</td>
                                <td>{$fila->first_name}</td> 
                                <td>{$fila->last_name}</td> 
                                <td>{$fila->address_id}</td> 
                                <td>{$imagen}</td> 
                                <td>{$fila->email}</td> 
                                <td>{$fila->store_id}</td> 
                                <td>{$fila->active}</td> 
                                <td>{$fila->username}</td>
                                <td>{$fila->password}</td>
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