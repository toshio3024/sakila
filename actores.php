<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "actores";

$error = "";

try {
    # borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al botton
    if (isset($_POST['boton-guardar'])) {
        echo "guardando...";
        //variables
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];

        // validaciones
        if (empty($first_name)) {
            throw new Exception("El nombre no puede estar vacio");
        }
        if (empty($last_name)) {
            throw new Exception("El nombre no puede estar vacio");
        }
        //guardar
        $query = "INSERT INTO actor (first_name, last_name) values ('$first_name', '$last_name')";

        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";

            $script_alerta = alerta("Insertado", "Datos correcto", "success");
        } else {
            $script_alerta = alerta("Error", "No pudo insertar", "error");

            throw new Exception("No se pudo insertar los datos");
        }
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}



# incluir la vista
require_once  "vistas/vista-actores.php";

# debe haber codigo despues de esta linea