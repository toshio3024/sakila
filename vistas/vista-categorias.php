<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php"; ?>
    <div class="container">
        <h3><?php echo $pagina; ?></h3>
        <div class="row">
            <form class="col-6" method="post">
                <input type="text" name="id" value="<?php echo $category_id ?? ''; ?>">
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input value="<?php echo $name ?? ''; ?>" type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="boton-guardar">Guardar</button>
                </div>
            </form>
            <?php if (!empty($error)) : ?>
                <div class=" alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo $error; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?php if (!empty($_SESSION)) : ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <form class="col-4 ">

                <div class="input-group mb-3">
                    <input type="text" name="buscador" class="form-control" placeholder="Buscador">
                    <button class="btn btn-outline-secondary" type="submit" name="boton-buscar"><i class="bi bi-search"></i>Buscar</button>
                </div>

            </form>
        </div>
        <div class="row">
            <div class="col-12 ">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Category id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Last update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM category";
                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM category where name ='$buscador'";
                        }
                        $resultado = mysqli_query($conexion, $query);

                        ?>
                        <?php if ($resultado) : ?>
                            <?php while ($fila = mysqli_fetch_assoc($resultado)) :
                            ?>


                                <tr>
                                    <td><?php echo $fila['category_id']; ?></td>
                                    <td><?php echo $fila['name']; ?></td>
                                    <td><?php echo $fila['last_update']; ?></td>
                                    <td>
                                        <a href='<?php echo $_SERVER['PHP_SELF'] . "?editar=" . $fila['category_id']; ?>'>Editar</a>
                                        <a href='<?php echo $_SERVER['PHP_SELF'] . "?eliminar" . $fila['category_id']; ?>'>Eliminar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require_once "parte_footer.php"; ?>
</body>

</html>