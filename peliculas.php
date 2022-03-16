<?php
require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "peliculas";


try {
    # borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al botton
    if (isset($_POST['boton-guardar'])) {
        echo "guardando...";
        //variables
        $film_id = $_POST["film_id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $release_year = $_POST["release_year"];
        $language_id = $_POST["language_id"];
        $original_language_id = $_POST["original_language_id"];
        $rental_duration = $_POST["rental_duration"];
        $rental_rate = $_POST["rental_rate"];
        $length = $_POST["length"];
        $replacement_cost = $_POST["replacement_cost"];
        $rating = $_POST["rating"];
        $special_features = $_POST["special_features"];
        



        // validaciones
        if (empty($film_id)) {

            throw new Exception("el Nombre no puede estar vacio");
        }
        if (empty($title)) {
            throw new Exception("El Apellido no puede estar vacio");
        }
        if (empty($description)) {

            throw new Exception(" la direccion  no puede estar vacio");
        }

        if (empty($release_year)) {

            throw new Exception(" El correo no puede estar vacio");
        }

        if (empty($language_id)) {

            throw new Exception("La tienda no puede estar vacio");
        }


        if (empty($original_language_id)) {

            throw new Exception(" El usuario no puede estar vacio");
        }

        if (empty($rental_duration)) {

            throw new Exception(" la contraseña no puede estar vacio");
        }

        if (empty($rental_rate)) {

            throw new Exception(" la contraseña no puede estar vacio");
        }

        if (empty($length)) {

            throw new Exception(" la contraseña no puede estar vacio");
        }

        if (empty($replacement_cost)) {

            throw new Exception(" la contraseña no puede estar vacio");
        }

        if (empty($rating)) {

            throw new Exception(" la contraseña no puede estar vacio");
        }

        if (empty($special_features)) {

            throw new Exception(" la contraseña no puede estar vacio");
        }

         //guardar

        $query = "INSERT INTO film ( film_id,  title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features ) VALUES ( '$film_id', '$title', '$description', '$release_year', '$language_id', '$original_language_id', '$rental_duration', '$rental_rate', '$rental_rate', '$length', '$replacement_cost', '$rating', '$special_features')";

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
require_once  "vistas/vista-peliculas.php";

# debe haber codigo despues de esta linea