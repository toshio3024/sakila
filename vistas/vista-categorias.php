<?php require_once "parte_head.php"; ?>

<body>

    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina;?> </h3>

        <div class="row">
            <form class="">

            </form>
        </div>
        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">category_id</label>
                    <input type="text" name="category" class="form-control">
                </div>
                <div class="mb-3">
                    <button name="boton-guardar" class="btn btn-primary">Guardar</button>
                </div>

            </form>
            <?php 
            if (!empty($error)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close"></button>

            </div>

            <?php endif; ?>
        </div>

        </form>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id categoria</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">fecha atualizada</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $query = "SELECT * FROM category ";
                        
                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM category WHERE name = '$buscador'";   
                        }
                
                        $resultado = mysqli_query($conexion, $query);
                        if ($resultado) {
                            while($fila = mysqli_fetch_object($resultado)) {
                                echo "
                            <tr> 
                                <td>{$fila->category_id}</td>
                                <td>{$fila->name}</td> 
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