<?php
require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "tiendas";

try {
    # borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al botton
    if (isset($_POST['boton-guardar'])) {
        echo "guardando...";
        //variables
        $name = $_POST["name"];

        // validaciones
        if (empty($name)) {
            throw new Exception("El nombre no puede estar vacio");
        }
        //guardar
        $query = "INSERT INTO store (store) values ('$store')";

        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";

            $script_alerta = alerta("Insertado", "Datos correcto", "success");
        } else {
            
            $script_alerta = alerta("Error", "no pudo insertar", "success");
            
            throw new Exception("No se pudo insertar los datos");
        }
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}



# incluir la vista
require_once  "vistas/vista-tiendas.php";

# debe haber codigo despues de esta linea