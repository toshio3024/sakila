<?php require_once "parte_head.php"; ?>

<body>

    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">$film_id</label>
                    <input type="text" name="film_id" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">titulo</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">descripcion</label>
                    <input type="text" name="description" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">release_year</label>
                    <input type="text" name="release_year" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">language_id</label>
                    <select class="form-select" name="language_id">
                        <option value="" selected>seleciones---</option>


                        <?php
                        $query = "SELECT * FROM language";

                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->language_id'>$fila->name</option>";
                            }
                        }

                        ?>
                    </select>

                    <?php
                    if (!empty($error)) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php echo $error; ?>
                            <button type="button" class="btn-close"></button>
                        <?php endif; ?>

                        </div>
                        <div class="mb-3">
                            <label for="">original_language_id</label>
                            <select class="form-select" name="original_language_id">
                                <option value="" selected>seleciones---</option>

                                <?php
                                $query = "SELECT * FROM language";

                                $resultado = mysqli_query($conexion, $query);

                                if ($resultado) {
                                    while ($fila = mysqli_fetch_object($resultado)) {
                                        echo "<option value='$fila->language_id'>$fila->name</option>";
                                    }
                                }

                                ?>

                            </select>


                            <div class="mb-3">
                                <label for="">rental_duration</label>
                                <input type="text" name="rental_duration" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">rental_rate</label>
                                <input type="text" name="rental_rate" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">length</label>
                                <input type="text" name="length" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">replacement_cost</label>
                                <input type="text" name="replacement_cost" class="form-control">


                                <div class="mb-3">
                                    <label for="">rating</label>
                                    <select class="form-select" name="rating">
                                        <option value="" selected>seleciones---</option>

                                        <?php
                                        $query = "SELECT DISTINCT rating FROM film WHERE rating!= ''";

                                        $resultado = mysqli_query($conexion, $query);

                                        if ($resultado) {
                                            while ($fila = mysqli_fetch_object($resultado)) {
                                                echo "<option value='$fila->rating'>$fila->rating</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="">special_features</label>
                                    <select class="form-select" name="special_features">
                                        <option value="" selected>seleciones---</option>

                                        <?php
                                        $query = "SELECT DISTINCT special_features FROM film WHERE special_features!= ''";

                                        $resultado = mysqli_query($conexion, $query);

                                        if ($resultado) {
                                            while ($fila = mysqli_fetch_object($resultado)) {
                                                echo "<option value='$fila->special_features'>$fila->special_features</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>


                                <?php
                                if (!empty($error)) : ?>


                                    <div class="mb-3">
                                        <button class="btn btn-primary" name="boton-guardar">Guardar</button>
                                        <button type="button" class="btn-close"></button>
                                    </div>
                                <?php endif; ?>

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
                            <th scope="col">ID peliculas</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descricion</th>
                            <th scope="col">año lanzo</th>
                            <th scope="col">ID idiomas</th>
                            <th scope="col">ID Idiomas original</th>
                            <th scope="col">El tiempo durante que fue rentada</th>
                            <th scope="col">Costo de arredamiento</th>
                            <th scope="col">que tiempo dura</th>
                            <th scope="col">costo de remplazo</th>
                            <th scope="col">clasificacion de la pelicula</th>
                            <th scope="col">caracteristica espeiales</th>
                            <th scope="col">fecha atualizada</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM film ";

                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM film WHERE film = '$buscador'";
                        }

                        $resultado = mysqli_query($conexion, $query);
                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "
                            <tr> 
                                <td>{$fila->film_id}</td>
                                <td>{$fila->title}</td> 
                                <td>{$fila->description}</td> 
                                <td>{$fila->release_year}</td> 
                                <td>{$fila->language_id}</td> 
                                <td>{$fila->original_language_id}</td> 
                                <td>{$fila->rental_duration}</td> 
                                <td>{$fila->rental_rate}</td> 
                                <td>{$fila->length}</td> 
                                <td>{$fila->replacement_cost}</td> 
                                <td>{$fila->rating}</td> 
                                <td>{$fila->special_features}</td> 
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