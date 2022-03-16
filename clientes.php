<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "clientes";

try {
    # borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al botton
    if (isset($_POST['boton-guardar'])) {
        echo "guardando...";
        //variables
        $store_id = $_POST["store_id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $address_id = $_POST["address_id"];
        $create_date = $_POST["create_date"];
        



        // validaciones
        if (empty($store_id)) {

            throw new Exception("la tienda no puede estar vacio");
        }
        if (empty($first_name)) {
            throw new Exception("El Nombre no puede estar vacio");
        }
        if (empty($last_name)) {

            throw new Exception(" el apellido no puede estar vacio");
        }

        if (empty($email)) {

            throw new Exception(" El correo no puede estar vacio");
        }

        if (empty($address_id)) {

            throw new Exception("La tienda no puede estar vacio");
        }


        if (empty($create_date)) {

            throw new Exception(" El usuario no puede estar vacio");
        }

        
        

        //guardar
        $query = "INSERT INTO staff (store_id, first_name, last_name, email,  address_id, create_date) VALUES ( '$store_id', '$first_name', '$last_name', '$email', '$address_id', '$create_date')";

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
require_once  "vistas/vista-clientes.php";

# debe haber codigo despues de esta linea