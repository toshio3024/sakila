<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "ciudades";



# debe haber codigo despues de esta linea

try {
    # borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al botton
    if (isset($_POST['boton-guardar'])) {
        echo "guardando...";
        //variables
        $city = $_POST["city"];
        $country_id = $_POST["country_id"];

        // validaciones
        if (empty($city)) {
            throw new Exception("la ciudad no puede estar vacio");
        }
        if (empty($country_id)) {
            throw new Exception("Debe seleccionar pais");
        }
        //guardar
        $query = "INSERT INTO city (city, country_id) VALUES ('$city', '$country_id')";

        echo $query;

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
require_once  "vistas/vista-ciudades.php";

# debe haber codigo despues de esta linea